<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Falla;

class FallasController extends Controller
{
    function index() {
        $fallas = Falla::paginate(5);
        return view('fallas.index', compact('fallas'));
    }

    function nuevaFalla() {
        return view('form.registrarfalla');
    }

    function formRegistrarFalla() {
        return view('form.registrar.falla');
    }

    function action(Falla $falla) {
        if ($falla->delete()) {
            return json_encode([
                'title' => 'SUCCESS',
                'message' => 'Borrado con éxito de la base de datos'
            ]);
        } else {
            return json_encode([
                'title' => 'ERROR',
                'message' => 'No se pudo borrar de la base de datos'
            ]);
        }
    }
}
