<?php

use Faker\Generator as Faker;
use App\Cliente;
use App\Marca;

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
        'cliente' => Cliente::all()->random()->id,
        'marca' => Marca::all()->random()->id,
        'descripcion' => array_random(['Laptop', 'PC']),
        'modelo' => strtoupper(str_random(rand(5, 10))),
        'serie' => strtoupper(str_random(rand(5, 18))),
    ];
});
