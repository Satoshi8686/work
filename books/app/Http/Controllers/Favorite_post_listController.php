<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Favorite_post_listController extends Controller
{
    public function index() {
        return view('favorite_post_list');
    }
}
