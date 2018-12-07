<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
use App\DetallesOrden;
use Illuminate\Support\Facades\Auth;

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
        $ord = Orden::where('cliente', Auth::user()->clientuser_id)->get();
        return view('misOrdenes')->with(compact('ord'));
    }

    public function miHist()
    {
        return view('miHistorial');
    }

    public function detalles(){//listado
        return ('');
    }

    public function cargarAuto()
    {
        $ord = Orden::where('cliente', Auth::user()->clientuser_id)->get();
        return view('autorizaciones')->with(compact('ord'));
    }

    public function cargarCalificaciones()
    {
        $ord = Orden::where('cliente', Auth::user()->clientuser_id)->get();
        return view('calificarServicio')->with(compact('ord'));
    }

    public function cargarDetalles($id)
    {

        $detalles = DetallesOrden::where('id', $id)->get();
        
        return view('detallesOrden')->with(compact('detalles'));
    }
}
