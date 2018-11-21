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
        Servicio::create([
            'servicio' => 'Reparación'
        ]);

        Servicio::create([
            'servicio' => 'Mantenimiento Preventivo'
        ]);

        Servicio::create([
            'servicio' => 'Mantenimiento Correctivo'
        ]);
    }
}
