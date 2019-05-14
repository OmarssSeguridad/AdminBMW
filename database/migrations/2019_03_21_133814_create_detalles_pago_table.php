<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_pagos', function (Blueprint $table) {
            $table->bigIncrements('id_detalle');
            $table->unsignedbigInteger('id_pago');
            $table->unsignedbigInteger('id_producto')->unsigned();
            $table->Integer('cantidad');
            $table->float('precio',10,2); 
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
        Schema::dropIfExists('detalles_pago');
    }
}
