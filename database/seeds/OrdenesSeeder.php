<?php

use Illuminate\Database\Seeder;
use App\DetallesOrden;
use App\Equipo;
use App\Orden;
use App\Folio;
use Faker\Factory;
use App\Estado;
use App\Servicio;
use App\Empleado;
use App\Falla;
use App\EquiposFallas;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times = DatabaseSeeder::$ordenes;
        $faker = Factory::create();
        $this->command->getOutput()->progressStart($times);
        for ($i=0; $i < $times; $i++) {

            $folio = factory(Folio::class)->create();
            $cliente = App\Cliente::all()->random()->id;
            $orden = Orden::create([
                'id' => $folio->id,
                'cliente' => $cliente,
                'persona_entrega' => array_random(['', $faker->name]),
                'fecha_ingreso' => $faker->dateTime(),
                'empleado_recibe' => App\Empleado::all()->random()->id,
            ]);

            $equipos = Equipo::where('cliente', $cliente)->get();

            foreach ($equipos as $equipo) {
                if(rand(0, 1)) {
                    $estado = Estado::all()->random()->id;

                    $min = strtotime($orden->fecha_ingreso->format('Y-m-d H:i:s'));
                    $now = strtotime(date('Y-m-d H:i:s'));
                    $date1 = rand($min, $now);
                    $date2 = rand($date1, $now);
                    DetallesOrden::create([
                        'id' => $folio->id,
                        'equipo' => $equipo->id,
                        'estado' => $estado,
                        'servicio' => Servicio::all()->random()->id,
                        'fecha_terminado' => $estado < 5 ? null : date('Y-m-d H:i:s', $date1),
                        'empleado_repara' => $estado < 2 ? null : Empleado::tecnicos()->get()->random()->id,
                        'fecha_entrega' => $estado < 6 ? null : date('Y-m-d H:i:s', $date2),
                        'empleado_entrega' => $estado < 6 ? null : Empleado::all()->random()->id,
                        'garantia' => rand(0, 1)
                    ]);

                    $fallas = Falla::all();
                    foreach ($fallas as $falla) {
                        if (rand(0, 1)) {
                            EquiposFallas::create([
                                'orden_id' => $folio->id,
                                'equipo_id' => $equipo->id,
                                'falla_id' => $falla->id
                            ]);
                        }
                    }
                }
            }
            
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
