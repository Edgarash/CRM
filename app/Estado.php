<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public function getOrdenes() {
        return $this->hasMany(Orden::class, 'estado');
    }
}
