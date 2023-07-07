<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function api()
    {
       $product = Product::all();
       return $product;
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
}
