<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal')->unsigned();
            $table->foreign('sucursal')->references('id')->on('sucursales');
            $table->integer('folio')->unsigned();
            $table->unique([
                'sucursal',
                'folio',
            ]);
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
        Schema::dropIfExists('folios');
    }
}
