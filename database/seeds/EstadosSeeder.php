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
        
        Estado::create([
            'Estado' => 'Sin Revisión'
        ]);
        
        Estado::create([
            'Estado' => 'Banco'
        ]);
        
        Estado::create([
            'Estado' => 'Por Autorizar'
        ]);
        
        Estado::create([
            'Estado' => 'Partes'
        ]);
        
        Estado::create([
            'Estado' => 'Terminado'
        ]);
        
        Estado::create([
            'Estado' => 'Entregado'
        ]);

        /*
        Estado::create([
            'Estado' => 'Recibido'
        ]);
        Estado::create([
            'Estado' => 'En Revisión'
        ]);
        Estado::create([
            'Estado' => 'En Reparación'
        ]);
        Estado::create([
            'Estado' => 'Reparado'
        ]);
        Estado::create([
            'Estado' => 'Entregado'
        ]);
        */
    }
}
