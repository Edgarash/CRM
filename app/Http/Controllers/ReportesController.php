<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reportes\ReporteOrden;
use App\Orden;
use App\Cliente;
use App\Empleado;
use App\Estado;
use App\DetallesOrden;

class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function showOrden($id) {
        if (Orden::find($id) != null) {
            $reporte = new ReporteOrden();
            $reporte->show($id);
        } else {
            return 'No existe';
        }
    }

    function MostrarOrdenes(Request $request)
    {
        $cliente = $request->get('cliente');
        $id = $request->get('id');
        $ordenes = Orden::ID($id)->orCliente($cliente)->paginate(5);
        return view('tordenes', compact('ordenes', 'cliente', 'id'));
    }

    public function MostrarProductividad()
    {
        $tecnicos = Empleado::tecnicos()->get();
        $estados = Estado::whereIn('id', [5, 6])->orderBy('estado', 'asc')->get();

        $selTecnico = request()->has('selTecnico') ? request('selTecnico') : null;
        $selEstado = request()->has('selEstado') ? request('selEstado') : null;
        $fechaInicio = request()->has('fechaInicio') ? request('fechaInicio') : null;
        $fechaFinal = request()->has('fechaFinal') ? request('fechaFinal') : null;

        $equipos = DetallesOrden::EntreFechas($fechaInicio, $fechaFinal);
        $equipos = (request()->has('selTecnico') ? $equipos->Tecnico($selTecnico) : $equipos);
        $equipos = (request()->has('selEstado') ? $equipos->Estado($selEstado) : $equipos->whereIn('estado', [5, 6]))
        // $equipos = DetallesOrden::where([
        //     ['empleado_repara', $selTecnico],
        //     ['estado', $selEstado],
        //     ['fecha_terminado', '>=', $fechaInicio.' 00:00:00'],
        //     ['fecha_terminado', '<=', $fechaFinal.' 23:59:59']
        // ])
        ->paginate(7);
        
        return view('rproductividad', compact(
            'tecnicos', 'estados', 'equipos', 'selEstado',
            'selTecnico', 'fechaInicio', 'fechaFinal'
        ));
    }
    public function MostrarEquiposEstado()
    {
        return view('rEquiposEstado');
    }

    function Productividad(Request $request)
    {
        $tecnico = $request->get('selTecnico');
        $estado = $request->get('selEstado');
        $fecha_inicial = $request->get('fechaInicio').' 00:00:00';
        $fecha_final = $request->get('fechaFinal').' 23:59:59';
        $equipos = DetallesOrden::where([
            ['empleado_repara', $tecnico],
            ['estado', $estado],
            ['fecha_terminado', '>=', $fecha_inicial],
            ['fecha_terminado', '<=', $fecha_final]
        ])->get();
        return json_encode($equipos);
    }
}
