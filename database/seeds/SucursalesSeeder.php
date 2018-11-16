<?php

use Illuminate\Database\Seeder;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$times = 10;
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {
            factory(App\Sucursal::class)->create();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
