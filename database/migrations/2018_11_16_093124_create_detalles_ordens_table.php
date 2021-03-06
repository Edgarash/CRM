<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ordenes', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('ordenes');

            $table->integer('equipo')->unsigned();
            $table->foreign('equipo')->references('id')->on('equipos');

            $table->integer('estado')->unsigned();
            $table->foreign('estado')->references('id')->on('estados');

            $table->integer('servicio')->unsigned();
            $table->foreign('servicio')->references('id')->on('servicios');

            $table->datetime('fecha_terminado')->nullable();

            $table->integer('empleado_repara')->unsigned()->nullable();
            $table->foreign('empleado_repara')->references('id')->on('users');

            $table->datetime('fecha_entrega')->nullable();
            
            $table->integer('empleado_entrega')->unsigned()->nullable();
            $table->foreign('empleado_entrega')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_ordenes');
    }
}
