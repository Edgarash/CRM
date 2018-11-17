<?php

use Faker\Generator as Faker;

$factory->define(App\Sucursal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'ciudad' => $faker->city,
        'colonia' => $faker->sentence(2),
        'calle' => $faker->streetName,
        'referencia' => $faker->sentence(10)
    ];
});
