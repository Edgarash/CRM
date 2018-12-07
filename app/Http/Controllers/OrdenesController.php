<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
use App\Cliente;

class OrdenesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index() {
        $ordenes = Orden::paginate(5);
        return view('ordenes.index', compact('ordenes'));
    }

    function Registrar() {
        return view('ordenes.registrar-ordenes');
    }

    function getCliente() {
        if ($id = request()->get('id'))  {
            if ($cliente = Cliente::select([
                'nombre', 'apellidos', 'RFC', 'email', 'colonia',
                'cp', 'calle', 'referencia', 'ciudad'
            ])->where('id', $id)->first()) {
                return $this->AjaxResponse($cliente);
            } else {
                return 'false';
            }
        } else {
            return $this->AjaxErrorResponse('ID del cliente');
        }
    }
}
