<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('RIF_4');
            $table->foreign('RIF_4')->references('RIF')->on('prestadores')->onDelete('cascade');
            $table->unsignedInteger('id_P_3');
            $table->foreign('id_P_3')->references('id')->on('paquetes')->onDelete('cascade');
            $table->unsignedInteger('id_Cliente_1');
            $table->foreign('id_Cliente_1')->references('id')->on('turistas')->onDelete('cascade');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Final');
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
        Schema::dropIfExists('itinerarios');
    }
}
