<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public 
    public function welcome(){
        return view('welcome');
    } 

    public function ordenes()
    {
        return view('misOrdenes');
    }

    public function miHist()
    {
        return view('miHistorial');
    }
}
