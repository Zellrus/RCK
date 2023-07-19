<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CreateController extends Controller
{
 public function createProduct()
 {
     $categories = Category::all();
//     dd($categories);
     return view('admin.product.create', compact('categories'));
 }
    public function  createCategory(){
        return  view('admin.product.category.create');
    }
}
