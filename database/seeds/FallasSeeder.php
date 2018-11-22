<?php

use Illuminate\Database\Seeder;
use App\Falla;

class FallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Array = [
            'No Prende',
            'Teclado',
            'Pantalla Táctil',
            'Puerto USB',
            'Puerto HDMI',
            'Puerto VGA'
        ];
        $times = count($Array);
        $this->command->getOutput()->progressStart($times);
        foreach ($Array as $Item) {
            Falla::create(['nombre' => $Item]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
