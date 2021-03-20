<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Post_hisController extends Controller
{
    public function index() 
    {
        $posts = Post::select(['title'])->get();
        return view('post_his',['posts' => $posts]);
    }

}
