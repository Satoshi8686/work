<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index() {
        $id = 1;
        $items = Inquiry::find($id);
        return view('inquiry',['items' => $items]);
    }
}
