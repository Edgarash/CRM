<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;

class Servicio extends Model
{
    //
    public function getOrdenes() {
        return $this->hasMany(Orden::class, 'servicio');
    }
}
