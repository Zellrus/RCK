<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;


use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $filename = uniqid();


         $test = ('/text/post/'.$filename.".php");
         Storage::disk('public')->put($test,$data['content']);


        $data['content'] = ("/storage".$test);

        $file = $data['image'];

        $path = $file->store('image/post/','public');

        $data['image'] = ("/storage/".$path);
        $post = Post::create($data);
        return redirect()->route('posts.index');


    }


}
