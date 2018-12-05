<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    public function getFullName() {
        return $this->nombre.' '.$this->apellidos;
    }
}
