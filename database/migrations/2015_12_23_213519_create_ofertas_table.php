<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ofertas');
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_oferta_id')->unsigned();
            $table->foreign('tipo_oferta_id')->references('id')->on('tipo__ofertas');
            $table->decimal('porcentaje_descuento');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->tinyInteger('estado');
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
        Schema::dropIfExists('ofertas');
    }
}
