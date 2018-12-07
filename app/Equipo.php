<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetallesOrden;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Marca;

class Equipo extends Model
{
    public function getMarca(){
        return $this->belongsTo(Marca::class, 'marca');
    }
    public function getCliente(){
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function getDetalleOrden()
    {
        return $this->belongsTo(DetallesOrden::class, 'id');
    }
    
}
