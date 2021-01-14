<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ventas');
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('comprobante_id')->unsigned();
            $table->foreign('comprobante_id')->references('id')->on('comprobante__ventas');
            $table->integer('numero_serie');
            $table->integer('numero_comprobante');
            $table->decimal('descuento');
            $table->decimal('totalpedido');
            $table->decimal('importetotal');
            $table->tinyInteger('estado');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->tinyInteger('envio');
            $table->decimal('precio_envio');
            $table->integer('mediopago_id')->unsigned();
            $table->foreign('mediopago_id')->references('id')->on('mediopagos');
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
        Schema::dropIfExists('ventas');
    }
}
