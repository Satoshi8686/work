<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index() {
        $id = 1;
        $items = Post::find($id);
        return view('post',['items' => $items]);

        $id = 1;
        $com = Comment::find($id);
        return view('post',['items' => $com]);
    }
}
