<?php

use Faker\Generator as Faker;
use App\Orden;
use App\Equipo;
use App\Estado;
use App\Servicio;

$factory->define(App\DetallesOrden::class, function (Faker $faker) {
    return [
        'id' => Orden::all()->random()->id,
        'equipo' => Equipo::all()->random()->id,
        'estado' => Estado::all()->random()->id,
        'servicio' => Servicio::all()->random()->id,
        'garantia' => rand(0,1),
    ];
});
