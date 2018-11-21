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
        Marca::create(['nombre' => 'DELL']);
        Marca::create(['nombre' => 'HP']);
        Marca::create(['nombre' => 'ASUS']);
        Marca::create(['nombre' => 'SAMSUNG']);
        Marca::create(['nombre' => 'ALIENWARE']);
        Marca::create(['nombre' => 'SONY']);
        Marca::create(['nombre' => 'VAIO']);
    }
}
