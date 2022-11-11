<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('pais');
            $table->integer('codigo_postal');
            $table->unsignedBigInteger('compra_id');
            $table->foreign('compra_id')->references('id_compra')->on('compras')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('envios');
    }
}
