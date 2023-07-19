<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\Category\StoreRequest;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $category = Category::create($data);
        return redirect()->route('products.index');
    }


}
