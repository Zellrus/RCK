<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($data)
    {
        $post = Post::find($data);

        return $post;
    }
}
