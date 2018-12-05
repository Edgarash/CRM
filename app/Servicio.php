<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;

class Servicio extends Model
{
    protected $table = 'servicios';

    public function getOrdenes() {
        return $this->hasMany(Orden::class, 'servicio');
    }
}
