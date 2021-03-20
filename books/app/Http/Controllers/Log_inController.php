<?php

namespace App\Http\Controllers\Auth;


//use App\Models\User;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guestLogin(Request $request)
    {

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            $articles = Article::latest()->paginate(5);
            return view('articles.index', ['articles' => $articles]);

        }
            return redirect()->back();

    }


}
