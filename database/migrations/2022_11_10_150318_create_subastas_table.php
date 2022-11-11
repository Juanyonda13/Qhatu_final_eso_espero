<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subastas', function (Blueprint $table) {
            $table->id('id_subasta');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->float('oferta',100);
            $table->unsignedBigInteger('comprador_id');
            $table->foreign('comprador_id')->references('id_comprador')->on('compradors')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('artesania_subastada_id');
            $table->foreign('artesania_subastada_id')->references('id_artesania_subastada')->on('artesania_subastadas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('subastas');
    }
}
