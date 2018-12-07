<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reportes\ReporteOrden;
use App\Orden;
use App\Cliente;
use App\Empleado;
use App\Estado;
use App\DetallesOrden;
use App\Reportes\ReporteProductividad;
use App\Reportes\ReporteEquiposEstados;

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

        $equipos = $this->Productividad($selTecnico, $selEstado, $fechaInicio, $fechaFinal)->paginate(7);
        
        return view('rproductividad', compact(
            'tecnicos', 'estados', 'equipos', 'selEstado',
            'selTecnico', 'fechaInicio', 'fechaFinal'
        ));
    }

    public function ReporteProductividad() {
        $selTecnico = request()->has('selTecnico') ? request()->validate(['selTecnico' => 'required'])['selTecnico'] : null;
        $selEstado = request()->has('selEstado') ? request('selEstado') : null;
        $fechaInicio = request()->has('fechaInicio') ? request('fechaInicio') : null;
        $fechaFinal = request()->has('fechaFinal') ? request('fechaFinal') : null;

        $equipos = $this->Productividad($selTecnico, $selEstado, $fechaInicio, $fechaFinal)->get();
        $reporte = new ReporteProductividad();
        $reporte->show($equipos);
    }

    public function ReporteEquiposEstado() {
       // $selTecnico = request()->has('selTecnico') ? request()->validate(['selTecnico' => 'required'])['selTecnico'] : null;
        $selEstado = request()->has('selEstado') ? request('selEstado') : null;
        $fechaInicio = request()->has('fechaInicio') ? request('fechaInicio') : null;
        $fechaFinal = request()->has('fechaFinal') ? request('fechaFinal') : null;

        $equipos = $this->EquiposEstado($selEstado, $fechaInicio, $fechaFinal)->get();
        $reporte = new ReporteEquiposEstados();
        $reporte->show($equipos, $selEstado, $fechaInicio, $fechaFinal);
    }

    public function MostrarEquiposEstado()
    {
        $tecnicos = Empleado::tecnicos()->get();
        $estados = Estado::orderBy('estado', 'asc')->get();
        $selEstado = request()->has('selEstado') ? request('selEstado') : null;
        $fechaInicio = request()->has('fechaInicio') ? request('fechaInicio') : null;
        $fechaFinal = request()->has('fechaFinal') ? request('fechaFinal') : null;
        
        $equipos = $this->EquiposEstado($selEstado, $fechaInicio, $fechaFinal)->paginate(7);
        
        return view('rEquiposEstado', compact(
            'tecnicos', 'estados', 'equipos', 'selEstado', 'fechaInicio', 'fechaFinal'
        ));
    }
    function EquiposEstado($selEstado, $fechaInicio, $fechaFinal)
    {
        
        $ordenes = Orden::EntreFechasIngreso($fechaInicio, $fechaFinal)->pluck('id');
        $equipos = DetallesOrden::join('ordenes', 'ordenes.id', '=', 'detalles_ordenes.id')
        ->orderBy('ordenes.fecha_ingreso', 'asc')
        ->select('detalles_ordenes.*')
        ->whereIn('detalles_ordenes.id', $ordenes);
        $equipos = ($selEstado != null ? $equipos->Estado($selEstado) : $equipos)
        ->orderBy('empleado_repara', 'asc');
        return $equipos;
    }

    function Productividad($selTecnico, $selEstado, $fechaInicio, $fechaFinal)
    {
        $equipos = DetallesOrden::EntreFechas($fechaInicio, $fechaFinal);
        $equipos = ($selTecnico != null ? $equipos->Tecnico($selTecnico) : $equipos);
        $equipos = ($selEstado != null ? $equipos->Estado($selEstado) : $equipos->whereIn('estado', [5, 6]))
        ->orderBy('empleado_repara', 'asc');

        return $equipos;
    }
}
