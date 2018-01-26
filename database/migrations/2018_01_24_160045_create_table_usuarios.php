<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clientes_id')->default(0);
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->string('imagem_avatar')->nullable();
            $table->integer('usuario_tipo')->default(0);
            $table->boolean('bloqueio')->default(0);
            $table->integer('externo_id')->default(0);
            $table->string('api_token', 60)->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
