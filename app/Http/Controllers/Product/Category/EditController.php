<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditController extends Controller
{
 public function __invoke(Category $category)
 {

     return view('admin.product.category.edit',compact('category'));
 }

}
