<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Array = [
            'Sin Revisión',
            'Banco',
            'Por Autorizar',
            'Partes',
            'Terminado',
            'Entregado',
        ];
        $times = count($Array);
        $this->command->getOutput()->progressStart($times);
        foreach ($Array as $Item) {
            Estado::create(['Estado' => $Item]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
