<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Falla;

class FallaController extends Controller
{
    function index() {
        return view('fallas.index');
    }

    function nuevaFalla() {
        return view('form.registrarfalla');
    }

    function formRegistrarFalla() {
        return view('form.registrar.falla');
    }

    function accion() {
        $data = request()->all();
        $falla = Falla::create(['nombre' => $data['nombre']]);
        
    }
}
