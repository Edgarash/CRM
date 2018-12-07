<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orden;
use App\Traits\Encryptable;
use App\Traits\GetMulipleAttributes;

class Cliente extends Model
{
    use Encryptable, GetMulipleAttributes;

    protected $encryptable = [
        'nombre', 'apellidos', 'telefono', 'RFC',
        'ciudad', 'colonia', 'cp', 'calle', 'referencia'
    ];
    //
    public function getOrdenes() {
        return $this->hasMany(Orden::class, 'cliente');
    }

    public function getFullName() {
        return $this->nombre.' '.$this->apellidos;
    }

    public function getDomicilio() {
        return $this->calle.', '.$this->colonia.', '.$this->ciudad.', '.$this->cp;
    }
}
