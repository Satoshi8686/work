<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class topController extends Controller
{
    public function index() {
        $posts = Post::select(['text','title','datetime'])->get();
        $users = User::select(['name'])->get();
        return view('Top',['posts' => $posts],['users' => $users]);
    }
}
