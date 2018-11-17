<?php

use Faker\Generator as Faker;
use App\Cliente;

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
        'cliente' => Cliente::all()->random()->id,
        'marca' => array_random(['DELL', 'HP', 'ASUS', 'SAMSUNG', 'ALIENWARE', 'SONY', 'VAIO']),
        'modelo' => strtoupper(str_random(rand(5, 10))),
        'serie' => strtoupper(str_random(rand(5, 18))),
    ];
});
