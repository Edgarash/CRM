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

    function equipo()
    {
        return $this->belongsTo(DetallesOrden::class, 'equipo');
    }
    
    public function getNombreEquipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo');
    }
    public function getEstado()
    {
        return $this->belongsTo(Estado::class, 'estado');
    }
    public function getServicio()
    {
        return $this->belongsTo(Servicio::class, 'servicio');
    }
}
