<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Negocio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblNegocio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('descripcion',300);
            $table->string('ubicacion',100);
            $table->string('imagen');
            $table->integer('telefono');
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblNegocio');
    }
}
