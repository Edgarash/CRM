<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('contraseña'),
        'telefono' => array_random([612, 624, 613, 667, 615]).rand(1000000, 1999999),
        'RFC' => str_random(13),
        //'estado' => $faker->sentence(2),
        'ciudad' => $faker->city,
        'colonia' => $faker->sentence(2),
        'calle' => $faker->streetName,
        'referencia' => $faker->sentence(10),
        'activo' => rand(0, 1),
    ];
});
