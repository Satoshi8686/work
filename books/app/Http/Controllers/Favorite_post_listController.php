<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



   
class Favorite_post_listController extends Controller
{
    public function index() 
    {
       $posts = \DB::table('posts')
       ->join('users','posts.u_id','=','users.id')
       ->get();



        $posts = Post::select(['text','title','datetime','u_id'])->get();
        $users = User::select(['name'])->get();
        return view('Favorite_post_list',['posts' => $posts],['users' => $users]);
     
    
        
    
    
        
    
    }
}

   
    
