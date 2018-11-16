<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;
use App\User;

class Sucursal extends Model
{
    protected $table = "sucursales";
    //

    public function getFolios() {
        return $this->hasMany(Folio::class, 'sucursal');
    }

    public function getEmpleados() {
        return $this->hasMany(User::class, 'sucursal');
    }
}
