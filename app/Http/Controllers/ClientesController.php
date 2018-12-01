<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function buscar(Request $request) {
        if ($request->has('Nombre')) {
            $clientes = Cliente::where('nombre', 'like', '%'.$request->get('Nombre').'%')->get();
            return view('clientes.table-clientes', compact('clientes'));
        } else {
            return json_encode([
                'code' => 10,
                'title' => 'ERROR',
                'message' => 'No se especificó ningún nombre'
            ]);
        }
    }
}
