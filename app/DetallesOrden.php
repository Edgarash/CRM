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

    function scopeTecnico($query, $tecnico) {
        if (trim($tecnico)) {
            $query->where('empleado_repara', $tecnico);
        }
    }

    function scopeEntreFechas($query, $fecha1, $fecha2) {
        if (trim($fecha1) && trim($fecha2)) {
            $query->where([
                ['fecha_terminado', '>=', $fecha1.' 00:00:00'],
                ['fecha_terminado', '<=', $fecha2.' 23:59:59']
            ]);
        }
    }

    function scopeEstado($query, $estado) {
        if (trim($estado)) {
            $query->where('estado', $estado);
        }
    }
}
