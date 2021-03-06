<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'sucursal' => App\Sucursal::all()->random()->id,
        'email_verified_at' => now(),
        'password' => bcrypt('contraseña'), // secret
        'remember_token' => str_random(10),
    ];
});
