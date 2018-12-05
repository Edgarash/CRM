<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function siteRegister()
    {
        return view('siteRegister');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function siteLoginPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        print('done');
    }
}