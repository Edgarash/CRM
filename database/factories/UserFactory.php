<?php

use Faker\Generator as Faker;
use App\Empleado;
use App\Cliente;
use App\User;

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
    $empleado = rand(0,1);
    do {
        $ref = $empleado ? Empleado::all()->random() : Cliente::all()->random();
    } while (User::where('email', $ref->email)->first() != null);
    
    return [
        'email' => $ref->email,
        'email_verified_at' => now(),
        'password' => bcrypt('contraseña'), // secret
        'remember_token' => str_random(10),
        'empleado' => $empleado,
        'admin' => $empleado ? rand(0,1) : 0,
        'clientuser_id' => $ref->id,
        'activo' => rand(0,1)
    ];
});
