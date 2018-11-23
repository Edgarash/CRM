<?php

use Illuminate\Database\Seeder;
use App\Equipo;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times = DatabaseSeeder::$clientes;
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {
            $cliente = factory(App\Cliente::class)->create();
            for ($j=0; $j < DatabaseSeeder::$equipos; $j++) {     
                factory(Equipo::class)->create([
                    'cliente' => $cliente->id
                ]);
            }
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
