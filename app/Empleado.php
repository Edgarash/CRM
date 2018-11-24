<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function getFullName() {
        return $this->nombre.' '.$this->apellidos;
    }
}
