<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Array = [
            'Reparación',
            'Mantenimiento Preventivo',
            'Mantenimiento Correctivo',
        ];
        $times = count($Array);
        $this->command->getOutput()->progressStart($times);
        foreach ($Array as $Item) {
            Servicio::create(['servicio' => $Item]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
