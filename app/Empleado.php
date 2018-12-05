<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function getFullName() {
        return $this->nombre.' '.$this->apellidos;
    }

    public function scopeTecnicos($query) {
        return $query->where('tecnico', true);
    }


}
