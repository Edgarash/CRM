<?php

use Faker\Generator as Faker;

$factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'id' => factory(App\Folio::class)->create()->id,
        'cliente' => App\Cliente::all()->random()->id,
        'persona_entrega' => array_random(['', $faker->name]),
        'fecha_ingreso' => $faker->dateTime(),
        'empleado_recibe' => App\User::all()->random()->id,
    ];
});
