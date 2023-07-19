<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Category\UpdateRequest;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Category $category)
    {
        $data = $request->validated();
        if ($category->title == "no_category") return redirect()->route('products.index');
        $category->update($data);
        return redirect()->route('products.index');

    }


}
