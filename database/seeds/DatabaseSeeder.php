<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'sucursales',
            'estados',
            'users',
            'folios',
            'clientes',
            'servicios',
            'ordenes',
        ]);
        $this->call(SucursalesSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(OrdenesSeeder::class);
    }

    function truncateTables($tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    public static function createFolios($times = 1) {
        $list = [];
        $x = App\Folio::all()->last()->id;
        for ($i=0; $i < $times; $i++) { 
            do {
                $suc = App\Sucursal::all()->random();
                $sucursal = $suc->id;
                $last = App\Folio::all()->where('sucursal', $sucursal)->last();
                $folio = is_null($last) ? 1 : (1 + $last->folio);
            } while (App\Folio::all()->where('sucursal', $sucursal)->where('folio', $folio)->first() != null);
            $list[] = App\Folio::create(
                compact('sucursal', 'folio')
            );
        }
        return $times == 1 ? $list[0] : App\Folio::all()->where('id', '>', $x);
    }

    public static function createFolio() {
        do {
            $suc = App\Sucursal::all()->random();
            $sucursal = $suc->id;
            $last = App\Folio::all()->where('sucursal', $sucursal)->last();
            $folio = is_null($last) ? 1 : (1 + $last->folio);
        } while (App\Folio::all()->where('sucursal', $sucursal)->where('folio', $folio)->first() != null);
        return compact('sucursal', 'folio');
    }
}
