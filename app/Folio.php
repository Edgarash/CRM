<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folio extends Model
{
    protected $fillable = [
        'sucursal', 'folio',
    ];
}
