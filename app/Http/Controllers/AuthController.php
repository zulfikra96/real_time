<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
      // return "hello brow";
    }

    public function postLogin(Request $request,User $user)
    {
        $auth = [
            'username'  =>  $request->username,
            'password'  =>  $request->password,
        ];

        if(Auth::attempt($auth))
        {
            return redirect('/home');
        }
        else{
            return back()->with('alert','Maaf Password atau Username anda salah');
        }
    }

    
}
