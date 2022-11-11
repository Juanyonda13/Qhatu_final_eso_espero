<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtesaniaSubastadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesania_subastadas', function (Blueprint $table) {
            $table->id('id_artesania_subastada');
            $table->text('descripcion');
            $table->float('precio',100);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('artesania_id');
            $table->foreign('artesania_id')->references('id_artesania')->on('artesanias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('artesania_subastadas');
    }
}
