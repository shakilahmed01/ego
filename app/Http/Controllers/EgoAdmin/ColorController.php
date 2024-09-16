<?php

namespace App\Http\Controllers\EgoAdmin;

use App\Http\Controllers\Controller;
use App\Models\EgoModels\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ColorController extends Controller
{
    private function generateUniqueImageName($extension, $destinationPath)
    {
        do {
            $randomNumber = mt_rand(100000, 999999);
            $imageName = $randomNumber . '.' . $extension;
            $existingRecord = Color::where('image_path', $destinationPath . '/' . $imageName)->first();
        } while ($existingRecord || File::exists(public_path($destinationPath . '/' . $imageName)));
        return $imageName;
    }
    public function index()
    {
        $pageTitle = "Lens Colors";
        $colors = Color::paginate(10);
        return view('ego.ego-admin.colors.index', compact('pageTitle', 'colors'));
    }

    public function create()
    {
        $pageTitle = "Create Colors";
        return view('ego.ego-admin.colors.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:colors',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'color_intro' => 'required'
        ], [
            'name.required' => 'The color field is required.'
        ]);

        try {
            if($request->hasFile('image')){
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $imageName = $this->generateUniqueImageName($extension, 'ego-assets/images/color_image');
                $image->move(public_path('ego-assets/images/color_image'), $imageName);
                $imagePath = 'ego-assets/images/color_image/' . $imageName;
            }
            $color = new Color;
            $color->name = $request->name;
            $color->color_intro = $request->color_intro;
            $color->image_path = $imagePath;
            $color->save();

            $notify[] = ['success', 'Color created successfully.'];
            return redirect()->route('color.index')->withNotify($notify);
        } catch (\Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return redirect()->back()->withNotify($notify);
        }
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
                Rule::unique('colors')->ignore($id),
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'color_intro' => 'required'
        ], [
            'name.required' => 'The color field is required.'
        ]);
        $color->name = $request->input('name');
        if ($request->hasFile('image')) {
            if ($color->image_path && file_exists(public_path($color->image_path))) {
                unlink(public_path($color->image_path));
            }
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $this->generateUniqueImageName($extension, 'ego-assets/images/color_image');
            $image->move(public_path('ego-assets/images/color_image'), $imageName);
            $color->image_path = 'ego-assets/images/color_image/' . $imageName;
        }
        $color->color_intro = $request->color_intro;
        $color->save();

        $notify[] = ['success', 'Color updated successfully.'];
        return redirect()->route('color.index')->withNotify($notify);
    }

    public function destroy($id)
    {
        $color = Color::findOrFail($id);
       
        if ($color->products()->exists()) {
            $notify[] = ['error', 'Cannot delete this color because it is associated with one or more products.'];
            return redirect()->back()->withNotify($notify);
        }

        if ($color->image_path && file_exists(public_path($color->image_path))) {
            unlink(public_path($color->image_path));
        }

        $color->delete();
        $notify[] = ['success', 'Color deleted.'];
        return redirect()->back()->withNotify($notify);
    }
}
