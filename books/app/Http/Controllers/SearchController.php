<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class SearchController extends Controller
{
    public function index() {
        $id = 1;
        $items = Genre::find($id);
        return view('search',['items' => $items]);
    }
}
