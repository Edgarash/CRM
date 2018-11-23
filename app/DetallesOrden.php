<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class DetallesOrden extends Model
{
    protected $table = 'detalles_ordenes';

    function getEmpleadoRepara() {
        return $this->belongsTo(Empleado::class, 'empleado_repara');
    }
    function getEmpleadoEntrega() {
        return $this->belongsTo(Empleado::class, 'empleado_entrega');
    }
}
