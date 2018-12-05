<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


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
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'welcome';

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // public function siteRegisterPost(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|string',
    //         'g-recaptcha-response' => 'required|captcha',
    //     ]);

    //     print('done');
    // }

    // public function siteRegister()
    // {
    //     return view('welcome');
    // }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        $this->validate($request, [
            'g-recaptcha-response' => 'required|captcha',
        ]); 
    }

}
