<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;

use App\Models\Product;

use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $filename = uniqid();


         $test = ('/text/product/'.$filename.".php");
         Storage::disk('public')->put($test,$data['content']);


        $data['content'] = ("/storage".$test);

        $file = $data['image'];
       if(isset($data['in_stock']))   $data['in_stock'] = 1;
        $path = $file->store('image/product/','public');

        $data['image'] = ("/storage/".$path);
        $product = Product::create($data);
        return redirect()->route('products.index');


    }


}
