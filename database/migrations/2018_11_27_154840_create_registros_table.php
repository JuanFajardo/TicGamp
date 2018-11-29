<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration{
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('funcionario');
            $table->string('unidad');
            $table->string('codBienes');
            $table->text('trabajo');
            $table->date('fecha');
            $table->longText('firma');

            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('registros');
    }
}
