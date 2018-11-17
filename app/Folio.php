<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;

class Folio extends Model
{
    protected $fillable = [
        'sucursal', 'folio',
    ];

    public function getOrden() {
        return $this->belongsTo(Orden::class, 'id');
    }

    public function getSucursal() {
        return $this->hasOne(Sucursal::class, 'id', 'sucursal');
    }
}
