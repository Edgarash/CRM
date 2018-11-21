<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function nuevaFalla() {
        return view('form.registrarfalla');
    }
}
