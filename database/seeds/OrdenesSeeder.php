<?php

use Illuminate\Database\Seeder;
use App\DetallesOrden;
use App\Equipo;
use App\Orden;
use App\Folio;

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
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {
            $folio = factory(Folio::class)->create();
            $orden = factory(Orden::class)->create([
                'id' => $folio->id
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
