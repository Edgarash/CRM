<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\User;
use App\Estado;
use App\Servicio;
use App\DetallesOrden;

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

    public function getFechaAttribute() {
        return date_format(date_create($this->fecha_ingreso), 'd/M/Y h:i:s A');
    }

    public function scopeorCliente($query,$cliente)
    {
        if (trim($cliente) != "") {
            $clientes = Cliente::where('nombre', 'like', '%'.$cliente.'%')->pluck('id')->all();
            $query->orwhereIn('cliente', $clientes);
        }
    }

    public function scopeCliente($query,$cliente)
    {
        if (trim($cliente) != "") {
            $clientes = Cliente::where('nombre', 'like', '%'.$cliente.'%')->pluck('id')->all();
            $query->whereIn('cliente', $clientes);
        }
    }

    public function scopeID($query, $id) {
        if (trim($id) != "") {
            $query->where('id', $id);
        }
    }
}
