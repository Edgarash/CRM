<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times = 50;
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {
            factory(App\User::class)->create();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
