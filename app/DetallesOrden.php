<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;
use App\Equipo;
use App\Estado;
use App\Servicio;


class DetallesOrden extends Model
{
    protected $table = 'detalles_ordenes';

    function getEmpleadoRepara() {
        return $this->belongsTo(Empleado::class, 'empleado_repara');
    }
    
    function getEmpleadoEntrega() {
        return $this->belongsTo(Empleado::class, 'empleado_entrega');
    }

    function equipo() {
        return $this->belongsTo(DetallesOrden::class, 'equipo');
    }
    
    function getNombreEquipo() {
        return $this->belongsTo(Equipo::class, 'equipo');
    }

    function getEstado() {
        return $this->belongsTo(Estado::class, 'estado');
    }

    function getServicio() {
        return $this->belongsTo(Servicio::class, 'servicio'); 
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

    function getFechaIngresoAttribute(){
        return Orden::find($this->id)->fecha_ingreso;
    }

    function scopeEstado($query, $estado) {
        if (trim($estado)) {
            $query->where('estado', $estado);
        }
    }
}
