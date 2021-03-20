<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index() {
        $id = 1;
        $items = User::find($id);
        return view('user',['items' => $items]);
    }
}
