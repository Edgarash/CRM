<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    $nombre = $faker->firstName;
    $apellidos = $faker->lastName;
    $fecha_nacimiento = $faker->date();
    $RFC = strtoupper(substr($apellidos, 0, 3)).strtoupper(substr($nombre, 0, 1)).date('ymd', strtotime($fecha_nacimiento)).strtoupper(str_random(3));
    return [
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('contraseña'),
        'telefono' => array_random([612, 624, 613, 667, 615]).rand(1000000, 1999999),
        'RFC' => $RFC,
        //'estado' => $faker->sentence(2),
        'ciudad' => $faker->city,
        'colonia' => $faker->sentence(2),
        'cp' => rand(23000, 23090),
        'calle' => $faker->streetName,
        'referencia' => $faker->sentence(10),
        'fecha_nacimiento' => $fecha_nacimiento,
        'activo' => rand(0, 1),
    ];
});
