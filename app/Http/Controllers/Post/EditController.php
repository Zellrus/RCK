<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EditController extends Controller
{
 public function __invoke(Post $post)
 {
     $content= File::get(public_path($post->content));

     return view('admin.post.edit',compact('post','content'));
 }

}
