<?php

namespace App\Http\Controllers\Api\EgoVisionControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EgoModels\Product;
class ProductController extends Controller
{
    public function getProducts()
    {

        $products = Product::with(['color','lensDesign','baseCurve','category','replacement','tone','material','diameter','images'])->get();
        $formattedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'diameter' => $product->diameter->name ?? null,
                'base_curve' => $product->baseCurve->name ?? null,
                'material' => $product->material->name ?? null,
                'color' => $product->color->name ?? null,
                'category' => $product->category->name ?? null,
                'replacement' => $product->replacement->name ?? null,
                'mainImage' => $product->image_path ?? null,
                'images' => $product->images->map(function ($image) {
                    return $image->image_path;
                })
                // other fields
            ];
        });
    
        return response()->json($formattedProducts);
        
    }
    
}
