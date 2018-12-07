<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_fallas', function (Blueprint $table) {
            $table->integer('orden_id')->unsigned();
            $table->integer('equipo_id')->unsigned();
            $table->integer('falla_id')->unsigned();

            // $table->foreign('orden_id')->references('id')->on('ordenes');
            // $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign(['orden_id', 'equipo_id'])->references(['id', 'equipo'])->on('detalles_ordenes');
            $table->foreign('falla_id')->references('id')->on('fallas');

            $table->unique(['orden_id', 'equipo_id', 'falla_id']);

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
        Schema::dropIfExists('equipos_fallas');
    }
}

