<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{

    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('funcionario');
            $table->string('unidad');
            $table->string('codBienes');
            $table->string('trabajo');
            $table->string('fecha');
            $table->longText('firma');
            $table->string('sincro');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajos');
    }
}
