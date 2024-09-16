<?php

namespace App\Http\Controllers\EgoAdmin;

use App\Http\Controllers\Controller;
use App\Models\EgoModels\Color;
use App\Models\EgoModels\Product;
use App\Models\EgoModels\LensDesign;
use App\Models\EgoModels\BaseCurve;
use App\Models\EgoModels\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateProductRequest;
use App\Models\EgoModels\Diameter;
use App\Models\EgoModels\Material;
use App\Models\EgoModels\ProductImage;
use App\Models\EgoModels\Replacement;
use App\Models\EgoModels\Tone;
use App\Models\EgoModels\WaterContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $pageTitle = "Product List";
        $products = Product::with(['category', 'color', 'images'])->paginate(10);
        return view('ego.ego-admin.products.index', compact('pageTitle', 'products'));
    }

    public function create()
    {
        $pageTitle = "Add Product";
        $colors = Color::all();
        $categories = ProductCategory::all();
        $diameters = Diameter::all();
        $replacements = Replacement::all();
        $materials = Material::all();
        $tones = Tone::all();
        $bases = BaseCurve::all();
        $lDesigns = LensDesign::all();
        // $water_contents = WaterContent::all();
        return view('ego.ego-admin.products.create',compact('pageTitle','colors','categories','diameters','replacements','materials','tones','bases','lDesigns')
        );
    }

    public function store(ValidateProductRequest $request)
    {
        $validated = $request->validated();
        DB::beginTransaction();

        try {
            $product = new Product;
            $product->name = $validated['name'];
            $product->product_intro = $validated['product_intro'];
            $product->description = $validated['description'];
            $product->pack_content = $validated['pack_content'];
            $product->diameter_id = $validated['diameter_id'];
            $product->base_curve_id = $validated['base_curve_id'];
            $product->material_id = $validated['material_id'];
            $product->water_content_id = $validated['water_content_id'];
            $product->replacement_id = $validated['replacement_id'];
            $product->tone_id = $validated['tone_id'];
            $product->lens_design_id = $validated['lens_design_id'];
            $product->type = $validated['type'];
            $product->stock_quantity = $validated['stock_quantity'];
            $product->price = $validated['price'];
            $product->color_id = $validated['color_id'];
            $product->category_id = $validated['category_id'];

            if ($request->hasFile('product_image')) {
                $validated['product_image'] = $this->handleFileUpload($request->file('product_image'), 'ego-assets/images/products', 'Product');
                $product->image_path = $validated['product_image'];
            }

            $product->save();

            if ($request->hasFile('product_image_album')) {
                $images = $request->file('product_image_album');
                foreach ($images as $image) {
                    $imagePath = $this->handleFileUpload($image, 'ego-assets/images/product_images', 'ProductImage');
                    $productImage = new ProductImage;
                    $productImage->product_id = $product->id;
                    $productImage->image_path = $imagePath;
                    $productImage->save();
                }
            }

            DB::commit();

            $notify[] = ['success', 'Product added successfully.'];
            return to_route('product.index')->withNotify($notify);
        } catch (\Exception $e) {
            DB::rollBack();
            $notify[] = ['error', $e->getMessage()];
            return back()->withNotify($notify);
        }
    }

    private function handleFileUpload($file, $destinationPath, $modelName)
    {
        $extension = $file->extension();
        $imageName = $this->generateUniqueImageName($extension, $destinationPath, $modelName);
        $file->move(public_path($destinationPath), $imageName);
        return $destinationPath . '/' . $imageName;
    }

    private function generateUniqueImageName($extension, $destinationPath, $modelName)
    {
        do {
            $randomNumber = mt_rand(100000, 999999);
            $imageName = $randomNumber . '.' . $extension;
            $existingRecord = app("App\\Models\EgoModels\\$modelName")->where('image_path', $destinationPath . '/' . $imageName)->first();
        } while ($existingRecord || File::exists(public_path($destinationPath . '/' . $imageName)));
        return $imageName;
    }

    public function edit($id)
    {
        $pageTitle = "Color Edit";
        $color = Color::findOrFail($id);
        return view('ego.ego-admin.colors.edit', compact('pageTitle', 'color'));
    }

    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product_categories')->ignore($id),
            ],
        ], [
            'name.required' => 'The color field is required.'
        ]);
        $color->name = $request->input('name');
        $color->save();

        $notify[] = ['success', 'Color updated successfully.'];
        return redirect()->route('color.index')->withNotify($notify);
    }

    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        $notify[] = ['success', 'Color deleted.'];
        return redirect()->back()->withNotify($notify);
    }
}
