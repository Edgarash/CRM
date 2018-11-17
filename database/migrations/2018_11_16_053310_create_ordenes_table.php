<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('folios');

            $table->integer('cliente')->unsigned();
            $table->foreign('cliente')->references('id')->on('clientes');

            $table->string('persona_entrega')->nullable();

            $table->dateTime('fecha_ingreso')->default(date('Y-m-d H:i:s'));

            $table->integer('empleado_recibe')->unsigned();
            $table->foreign('empleado_recibe')->references('id')->on('users');

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
        Schema::dropIfExists('ordenes');
    }
}
