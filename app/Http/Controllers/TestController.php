<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
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
        $ord = Orden::where('cliente', 8)->get();
        return view('misOrdenes')->with(compact('ord'));
    }

    public function miHist()
    {
        return view('miHistorial');
    }

    public function detalles(){//listado
        return ('');
    }
}
