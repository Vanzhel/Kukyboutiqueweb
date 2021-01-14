<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('entradas');
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('comprobante_entrada_id')->unsigned();
            $table->foreign('comprobante_entrada_id')->references('id')->on('comprobante__entradas');
            $table->string('numero_comprobante');
            $table->decimal('costo_total');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
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
        Schema::dropIfExists('entradas');
    }
}
