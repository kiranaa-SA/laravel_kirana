<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function menampilkan(){
        
    $posts = Post::all();
    return view('tampil_post', compact('posts'));
    }
}
