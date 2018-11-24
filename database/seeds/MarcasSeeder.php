<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Array = [
            'DELL',
            'HP',
            'ASUS',
            'SAMSUNG',
            'ALIENWARE',
            'SONY',
            'VAIO',
            'ACER'
        ];
        $times = count($Array);
        $this->command->getOutput()->progressStart($times);
        foreach ($Array as $Item) {
            Marca::create(['nombre' => $Item]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
