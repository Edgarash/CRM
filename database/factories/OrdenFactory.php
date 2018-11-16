<?php

use Faker\Generator as Faker;

$factory->define(App\Orden::class, function (Faker $faker) {
    $id = factory(App\Folio::class)->create();
    $estado = App\Estado::all()->random()->id;
    return [
        'id' => $id->id,
        'cliente' => App\Cliente::all()->random()->id,
        'empleado_recibe' => App\User::all()->random()->id,
        'estado' => $estado,
        'servicio' => App\Servicio::all()->random()->id,
        'empleado_repara' => $estado < 2 ? null : App\User::all()->random()->id,
        'empleado_entrega' => $estado < 6 ? null : App\User::all()->random()->id,
    ];
});
