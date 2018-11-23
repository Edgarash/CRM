<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reportes\ReporteOrden;
use App\Orden;

class ReportesController extends Controller
{
    function showOrden($id) {
        if (Orden::find($id) != null) {
            $reporte = new ReporteOrden();
            $reporte->show($id);
        } else {
            return 'No existe';
        }
    }

    function MostrarOrdenes()
    {
        $ordenes = Orden::paginate(5);
        return view('tordenes', compact('ordenes'));
    }
}
