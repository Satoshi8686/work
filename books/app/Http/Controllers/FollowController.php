<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowController extends Controller
{
    public function index() 
    {
        $users = User::select(['name'])->get();
        return view('Follow',['users' => $users]);
    }
}
