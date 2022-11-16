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
            $table->string('name',60)->unique();
            $table->float('price',100);
            $table->integer('cantidad')->length(10);
            $table->text('descripcion');
            //carrito
              
            $table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->double('shipping_cost');
            $table->integer('category_id');
            $table->unsignedInteger('brand_id')->unsigned();

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
