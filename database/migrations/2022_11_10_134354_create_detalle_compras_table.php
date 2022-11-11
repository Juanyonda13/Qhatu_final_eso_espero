<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id('id_detalle_compra');
            $table->integer('unidades')->length(10);
            $table->float('valor_unitario');
            $table->float('valor_total');
            $table->unsignedBigInteger('artesania_id');
            $table->foreign('artesania_id')->references('id_artesania')->on('artesanias')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('comprador_id');
            $table->foreign('comprador_id')->references('id_comprador')->on('compradors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detalle_compras');
    }
}
