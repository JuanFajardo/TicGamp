<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('username');
            $table->string('password');

            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('ci');
            $table->string('cargo');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
