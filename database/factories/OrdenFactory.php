<?php

use Faker\Generator as Faker;

$factory->define(App\Orden::class, function (Faker $faker) {
    $id = factory(App\Folio::class)->create()->id;
    return [
        'id' => $id,
        'cliente' => App\Cliente::all()->random()->id,
        'persona_entrega' => array_random(['', $faker->name]),
        'fecha_ingreso' => $faker->date(),
        'empleado_recibe' => App\User::all()->random()->id,
    ];
});
