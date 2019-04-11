<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotociclistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motociclistas', function (Blueprint $table) {
            $table->bigIncrements('id_motociclista');
            $table->string('name');
            $table->string('ap');
            $table->string('am');
            $table->string('direccion');
            $table->string('fecNac');
            $table->Integer('telefono');
            $table->string('email');
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
        Schema::dropIfExists('motociclistas');
    }
}
