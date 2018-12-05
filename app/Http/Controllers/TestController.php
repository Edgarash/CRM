<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
use App\DetallesOrden;

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

    public function cargarAuto()
    {
        $ord = Orden::where('cliente', 8)->get();
        return view('autorizaciones')->with(compact('ord'));
    }
    public function cargarCalificaciones()
    {
        $ord = Orden::where('cliente', 8)->get();
        return view('calificarServicio')->with(compact('ord'));
    }

    public function cargarDetalles($id)
    {

        $detalle = DetallesOrden::where('id', 1)->get();
        
        return view('detallesOrden')->with(compact('detalle'));
    }
}
