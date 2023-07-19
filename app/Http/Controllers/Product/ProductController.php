<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function api()
    {
       $products = Product::all();
       $categories = Category::all();
       foreach ($products as $product){
           $product['categoryTitle'] = $product->category()->get()[0]->title;
       }

       return [$products, $categories];
    }
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index', compact('products','categories'));
    }

}
