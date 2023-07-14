<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class PostController extends Controller
{
    public function api()
    {
       $post = Post::all();
       return $post;
    }
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
}
