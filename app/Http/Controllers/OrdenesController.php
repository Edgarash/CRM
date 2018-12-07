<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
use App\Cliente;
use App\Equipo;

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
            if ($cliente = Cliente::find($id)) {
                $cliente = $cliente->campos([
                    'nombre', 'apellidos', 'RFC', 'ciudad', 'colonia', 
                    'cp', 'calle', 'referencia'
                ]);
                $cliente->equipos = 
                Equipo::join('marcas', 'marcas.id', '=', 'equipos.marca')
                ->where('cliente', $id)
                ->select([
                    'equipos.id', 'marcas.nombre as marca', 'equipos.modelo',
                    'equipos.descripcion', 'equipos.serie'
                    ])
                ->get();
                return $this->AjaxResponse($cliente);
            } else {
                return $this->AjaxErrorResponse('No se encontró el cliente', 404);
            }
        } else {
            return $this->AjaxErrorResponse('ID del cliente');
        }
    }

    function getEquipos() {
        if ($id = request()->get('id'))  {
            if (count($equipos = Equipo::where('cliente', $id)->get()) > 0) {
                return $this->AjaxResponse($equipos);
            } else {
                return $this->AjaxErrorResponse('No se encontraron equipos', 404);
            }
        } else {
            return $this->AjaxErrorResponse('ID del cliente');
        }
    }
}
