<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idUsuarioA');
            //hasta 30 caracteres
            $table->string('nombre',30);
            $table->string('apellidosP',30);
            $table->string('apellidosM',30);
            $table->string('rol');
            //aqui el correo va hacer unico
            //$table->string('correo')->array_unique();
            $table->string('usuario');
            $table->string('contrasena');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
