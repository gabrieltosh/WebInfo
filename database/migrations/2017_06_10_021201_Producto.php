<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblProducto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->integer('categoria_id')->unsigned();
            $table->string('descripcion',400);
            $table->string('imagen');
            $table->float('precio');
            $table->integer('marca_id')->unsigned();
            $table->integer('negocio_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoria_id')->references('id')->on('tblCategoria');
            $table->foreign('marca_id')->references('id')->on('tblMarca');
            $table->foreign('negocio_id')->references('id')->on('tblNegocio');
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
        Schema::dropIfExists('tblProducto');
    }
}
