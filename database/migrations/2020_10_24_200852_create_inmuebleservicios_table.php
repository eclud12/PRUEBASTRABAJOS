<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebleservicios', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inmuebles_id');
            $table->foreign('inmuebles_id')->references('id')->on('inmuebles');
            $table->unsignedBigInteger('servicios_id');
            $table->foreign('servicios_id')->references('id')->on('servicios');
=======
            $table->Increments('id');
            $table->integer('inmuebles_id')->unsigned();
            $table->foreign('inmuebles_id')->references('inmuebles_id')->on('inmuebles');
            $table->integer('servicios_id')->unsigned();
            $table->foreign('servicios_id')->references('servicios_id')->on('servicios');
>>>>>>> 37fc2ef055f1fa73b425dca3d07d48405e90d622
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
        Schema::dropIfExists('inmuebleservicios');
    }
}
