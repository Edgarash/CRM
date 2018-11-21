<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reportes\Orden;
use App\Orden as OrdenModel;

class ReportesController extends Controller
{
    function showOrden($id) {
        if (OrdenModel::find($id) != null) {
            $reporte = new Orden();
            $reporte->show($id); 
        } else {
            return 'No existe';
        }
    }
}
