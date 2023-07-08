<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Post\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $pathImage = substr( $product->image,8);
        $pathContent = substr( $product->content,8);
        Storage::disk('public')->delete($pathImage);
        Storage::disk('public')->delete($pathContent);

        $product->delete();
        return redirect()->route('products.index');
    }
}
