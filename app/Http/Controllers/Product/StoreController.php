<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $file = $data['image'];
        $path = $file->store('image/product/','public');

        $data['image'] = ("/storage/".$path);
        $product = Product::create($data);
        return redirect()->route('admin.panel');

        /*
        $data= $request->validated();
        //$this->service->store($data);

        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('post.index');
         */
    }
}
