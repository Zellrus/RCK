<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Post $post)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $file = $data['image'];
            $path = $file->store('image/post/', 'public');
            //  $pathImage = $product->image;

            $pathImage = substr($post->image, 8);
            Storage::disk('public')->delete($pathImage); //удаляем прошлую пикчу

            $data['image'] = ("/storage/" . $path);
        }
        $oldContent = File::get(public_path($post->content));
        $oldPathContent = $post->content;
        if (($data['content'] != $oldContent)){

            $filename = uniqid();


            $test = ('/text/product/'.$filename.".php");

            Storage::disk('public')->put($test,$data['content']);
            Storage::disk('public')->delete(substr( $oldPathContent,8));

            $data['content'] = ("/storage".$test);

        }else{
            $data['content'] = $oldPathContent;
        }


        $post->update($data);
        return redirect()->route('posts.index');

    }


}
