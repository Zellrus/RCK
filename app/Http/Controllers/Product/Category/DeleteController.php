<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        if ($category->title == "no_category") return redirect()->route('products.index');
        try{
        $category->delete();
    }catch (\Illuminate\Database\QueryException $ex){
            dd("Ошибка удаления. Возможно вы удаляете категорию, у которой есть продукты.");
        }

        return redirect()->route('products.index');
    }
}
