<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowerController extends Controller
{
    public function index() 
    {
        $users = User::select(['name'])->get();
        return view('Follower',['users' => $users]);
    }
}
