<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_hisController extends Controller
{
    public function index() {
        return view('post_his');
    }
}
