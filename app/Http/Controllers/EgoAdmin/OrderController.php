<?php

namespace App\Http\Controllers\EgoAdmin;

use App\Http\Controllers\Controller;
use App\Models\EgoModels\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($id)
    {
        $pageTitle = "Add To Cart";
        $product = Product::with(['images','color','lensDesign','baseCurve','category','replacement','tone','material','images'])
        ->findOrFail($id);
        return view('ego.pages.addToCart', compact('pageTitle', 'product'));
    }
}
