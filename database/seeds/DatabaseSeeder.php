<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public static $sucursales = 2;
    public static $empleados = 30;
    public static $users = 30;
    public static $clientes = 30;
    public static $ordenes = 100;
    public static $equipos = 10;

    public function run()
    {
        $this->truncateTables([
            'sucursales',
            'estados',
            'empleados',
            'folios',
            'clientes',
            'servicios',
            'ordenes',
            'fallas',
            'marcas',
            'equipos',
            'detalles_ordenes',
            'users',
            'equipos_fallas',
        ]);
        $this->call(SucursalesSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(MarcasSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(FallasSeeder::class);
        $this->call(OrdenesSeeder::class);
        $this->call(UsersSeeder::class);
    }

    function truncateTables($tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
