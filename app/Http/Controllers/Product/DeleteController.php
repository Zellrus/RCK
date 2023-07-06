<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Post\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
       $product->delete();
       return request([]);
    }
}
