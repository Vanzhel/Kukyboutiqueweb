<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('detalle__entradas');
        Schema::create('detalle__entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entrada_id')->unsigned();
            $table->foreign('entrada_id')->references('id')->on('entradas');
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->decimal('precio_compra');
            $table->decimal('precio_venta');
            $table->integer('cantidad');
            $table->decimal('descuento');
            $table->decimal('importe');
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
        Schema::dropIfExists('detalle__entradas');
    }
}
