<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditController extends Controller
{
 public function __invoke(Product $product)
 {
     $content= File::get(public_path($product->content));
     $categories = Category::all();
     return view('admin.product.edit',compact('product','content','categories'));
 }

}
