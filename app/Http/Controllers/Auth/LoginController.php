<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only'=> 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(){
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string',
            
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
        }
        return back()
        ->withErrors(['email'=> trans('auth.failed')])
        ->withInput(request(['email']));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
