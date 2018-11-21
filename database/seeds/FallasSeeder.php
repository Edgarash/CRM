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
        Falla::create(['nombre' => 'No Prende']);
        Falla::create(['nombre' => 'Teclado']);
        Falla::create(['nombre' => 'Pantalla Táctil']);
        Falla::create(['nombre' => 'Puerto USB']);
        Falla::create(['nombre' => 'Puerto HDMI']);
        Falla::create(['nombre' => 'Puerto VGA']);
    }
}
