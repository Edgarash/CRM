<?php

use Faker\Generator as Faker;

$factory->define(App\Folio::class, function (Faker $faker) {
    return DatabaseSeeder::createFolio();
});
