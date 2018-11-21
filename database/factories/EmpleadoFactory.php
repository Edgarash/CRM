<?php

use Faker\Generator as Faker;
use App\Sucursal;

$factory->define(App\Empleado::class, function (Faker $faker) {
    $fn = $faker->firstName;
    $ln = $faker->lastName;
    return [
        'nombre' => $fn,
        'apellidos' => $ln,
        'email' => $fn.'.'.$ln.'@microsistemas.com',
        'sucursal' => Sucursal::all()->random()->id
    ];
});
