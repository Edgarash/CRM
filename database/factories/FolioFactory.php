<?php

use Faker\Generator as Faker;

$factory->define(App\Folio::class, function (Faker $faker) {
    do {
        $suc = App\Sucursal::all()->random();
        $sucursal = $suc->id;
        $last = App\Folio::all()->where('sucursal', $sucursal)->last();
        $folio = is_null($last) ? 1 : (1 + $last->folio);
    } while (App\Folio::all()->where('sucursal', $sucursal)->where('folio', $folio)->first() != null);
    return compact('sucursal', 'folio');
});
