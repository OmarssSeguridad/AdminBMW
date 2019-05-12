<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ruta', function (Blueprint $table) {
            $table->bigIncrements('id_detalleruta');
            $table->unsignedbigInteger('id_ruta')->unsigned();
            $table->unsignedbigInteger('id_motociclista')->unsigned();
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('detalles_ruta', function (Blueprint $table) {
            $table->foreign('id_motociclista')->references('id_motociclista')->on('motociclistas');
        });
        Schema::table('imagenes', function (Blueprint $table) {
            $table->foreign('id_detalleruta')->references('id_detalleruta')->on('detalles_ruta');
        });
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
        });
        Schema::table('detalles_pago', function (Blueprint $table) {
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
        Schema::table('pagos',function (Blueprint $table) {
            $table->foreign('id_motociclista')->references('id_motociclista')->on('motociclistas');
            $table->foreign('id_modopago')->references('id_modopago')->on('modo_pagos');
        });
        Schema::table('detalles_ruta',function (Blueprint $table) {
            $table->foreign('id_ruta')->references('id_ruta')->on('rutas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_ruta');
    }
}
