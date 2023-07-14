<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {

        $pathImage = substr( $post->image,8);
        $pathContent = substr( $post->content,8);

        Storage::disk('public')->delete($pathImage);
        Storage::disk('public')->delete($pathContent);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
