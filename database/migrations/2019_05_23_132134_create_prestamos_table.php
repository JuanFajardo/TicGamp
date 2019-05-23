<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('responsable');
            $table->string('unidad');
            $table->dateTime('fecha_prestamo')->nullable();
            $table->dateTime('fecha_devolucion')->nullable();
            $table->string('codigo_bien');
            $table->text('detalle');
            $table->integer('id_user');
            $table->string('user_presto');
            $table->string('user_recogio');
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
        Schema::dropIfExists('prestamos');
    }
}
