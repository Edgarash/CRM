<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\User;
use App\Estado;
use App\Servicio;

class Orden extends Model
{
    protected $table = "ordenes";
    //

    public function getCliente() {
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function getPersonaEntrega() {
        return empty($this->persona_entrega) ? $this->getCliente->getFullName() : $this->persona_entrega;
    }

    public function getEstado() {
        return $this->belongsTo(Estado::class, 'estado');
    }

    public function getServicio() {
        return $this->belongsTo(Servicio::class, 'servicio');
    }

    public function getEmpleadoRecibe() {
        return $this->belongsTo(Empleado::class, 'empleado_recibe');
    }

    public function getEmpleadoRepara() {
        return $this->belongsTo(Empleado::class, 'empleado_repara');
    }

    public function getEmpleadoEntrega() {
        return $this->belongsTo(Empleado::class, 'empleado_entrega');
    }

    public function detalles() {
        return $this->hasMany(DetallesOrden::class, 'id');
    }
}
