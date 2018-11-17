<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;

class Cliente extends Model
{
    //
    public function getOrdenes() {
        return $this->hasMany(Orden::class, 'cliente');
    }

    public function getFullName() {
        return $this->nombre.' '.$this->apellidos;
    }
}
