<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    function index() {
        $clientes = Cliente::paginate(10);
        return view('clientes.index-clientes', compact('clientes'));
    }

    function buscar(Request $request) {
        if ($request->has('Nombre')) {
            $x = $request->get('Nombre');
            $clientes = Cliente::whereRaw('concat(nombre, " ", apellidos) like ?', '%'.$x.'%')->paginate(5);
            return view('clientes.buscar-clientes', compact('clientes'));
        } else {
            return json_encode([
                'code' => 10,
                'title' => 'ERROR',
                'message' => 'No se especificó ningún nombre'
            ]);
        }
    }
}
