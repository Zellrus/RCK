<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Product $product)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $file = $data['image'];
            $path = $file->store('image/product/', 'public');
            //  $pathImage = $product->image;

            $pathImage = substr($product->image, 8);
            Storage::disk('public')->delete($pathImage); //удаляем прошлую пикчу

            $data['image'] = ("/storage/" . $path);
        }
        $oldContent = File::get(public_path($product->content));
        $oldPathContent = $product->content;
        if (($data['content'] != $oldContent)){

            $filename = uniqid();


            $test = ('/text/product/'.$filename.".php");

            Storage::disk('public')->put($test,$data['content']);
            Storage::disk('public')->delete(substr( $oldPathContent,8));

            $data['content'] = ("/storage".$test);

        }else{
            $data['content'] = $oldPathContent;
        }


        if (isset($data['in_stock'])) $data['in_stock'] = 1;
        $product->update($data);
        return redirect()->route('products.index');

    }


}
