<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $usuarios = [
            [
                'email' => 'admin@microsistemas.com',
                'password' => bcrypt('admin'),
                'empleado' => 1,
                'admin' => 1,
                'activo' => 1
            ]
        ];
        
        $times = DatabaseSeeder::$users + count($usuarios);

        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {
            factory(App\User::class)->create();
            $this->command->getOutput()->progressAdvance();
        }
        foreach ($usuarios as $user) {
            factory(User::class)->create($user);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
