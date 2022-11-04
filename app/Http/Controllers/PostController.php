<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

 

class PostController extends Controller
{
    //
    public function index(Post $posts) {
        return view('posts.index')->with(['posts' => $posts->getPaginateByLimit()]);
    }
    
    
    public function show(Post $post) {
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create() {
        return view('posts.create');
    }
}
