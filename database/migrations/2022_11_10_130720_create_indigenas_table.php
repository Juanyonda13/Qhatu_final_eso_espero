<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndigenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indigenas', function (Blueprint $table) {
            $table->id('id_indigena');
            $table->string('nombre',60);
            $table->string('correo',60);
            $table->integer('telefono')->length(11);
            $table->integer('edad')->length(3);
            $table->string('foto');
            $table->unsignedBigInteger('etnia_id');
            $table->foreign('etnia_id')->references('id_etnia')->on('etnias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('indigenas');
    }
}
