<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Orden;
use App\Sucursal;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRecibidos() {
        return $this->hasMany(Orden::class, 'empleado_recibe');
    }

    public function getReparados() {
        return $this->hasMany(Orden::class, 'empleado_repara');
    }

    public function getEntregados() {
        return $this->hasMany(Orden::class, 'empleado_entrega');
    }

    public function getSucursal() {
        return $this->hasOne(Sucursal::class, 'id', 'sucursal');
    }
}
