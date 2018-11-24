<?php

use Illuminate\Database\Seeder;
use App\DetallesOrden;
use App\Equipo;
use App\Orden;
use App\Folio;
use Faker\Factory;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times = DatabaseSeeder::$ordenes;
        $faker = Factory::create();
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {

            $folio = factory(Folio::class)->create();

            $orden = Orden::create([
                'id' => $folio->id,
                'cliente' => App\Cliente::all()->random()->id,
                'persona_entrega' => array_random(['', $faker->name]),
                'fecha_ingreso' => $faker->dateTime(),
                'empleado_recibe' => App\Empleado::all()->random()->id,
            ]);

            factory(DetallesOrden::class)->create([
                'id' => $folio->id,
                'equipo' => Equipo::all()->where('cliente', $orden->cliente)->random()->id,
            ]);
            
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
