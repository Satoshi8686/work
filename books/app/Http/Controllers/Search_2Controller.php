<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class Search_2Controller extends Controller
{
    public function index() 
    {

        $books = Book::select(['text','name','writer'])->get();
        return view('search_2',['books' => $books]);
    
    }
}