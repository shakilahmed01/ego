<?php

namespace App\Http\Controllers\EgoAdmin;

use App\Http\Controllers\Controller;
use App\Models\EgoModels\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $pageTitle = "Product Category";
        $categories = ProductCategory::paginate(10);
        return view('ego.ego-admin.product-category.index', compact('pageTitle', 'categories'));
    }

    public function create()
    {
        $pageTitle = "Create Category";
        return view('ego.ego-admin.product-category.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_categories',
        ]);

        try {
            $category = new ProductCategory;
            $category->name = $request->name;
            $category->save();

            $notify[] = ['success', 'Category created successfully.'];
            return redirect()->route('category.view')->withNotify($notify);
        } catch (\Exception $e) {
            $notify[] = ['error', $e->getMessage()];
            return redirect()->back()->withNotify($notify);
        }
    }

    public function edit($id)
    {
        $pageTitle = "Category Edit";
        $category = ProductCategory::findOrFail($id);
        return view('ego.ego-admin.product-category.edit', compact('pageTitle', 'category'));
    }

    public function update(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product_categories')->ignore($id),
            ],
        ]);
        $category->name = $request->input('name');
        $category->save();

        $notify[] = ['success', 'Category updated successfully.'];
        return redirect()->route('category.view')->withNotify($notify);
    }

    public function destroy($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();
        $notify[] = ['success', 'Category deleted.'];
        return redirect()->back()->withNotify($notify);
    }
}
