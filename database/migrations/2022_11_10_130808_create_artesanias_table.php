<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtesaniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesanias', function (Blueprint $table) {
            $table->id('id_artesania');
            $table->string('nombre',60);
            $table->float('precio',100);
            $table->integer('cantidad')->length(10);
            $table->text('descripcion');
            $table->unsignedBigInteger('indigena_id');
            $table->foreign('indigena_id')->references('id_indigena')->on('indigenas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('artesanias');
    }
}
