<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
            $table->Increments('id');
>>>>>>> 37fc2ef055f1fa73b425dca3d07d48405e90d622
            $table->string('casa',30);
            $table->string('departamento',30);
            $table->string('oficina',30);
            $table->string('terreno',30);
            $table->unsignedBigInteger('estados_id');
<<<<<<< HEAD
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipios_id');
            $table->foreign('municipios_id')->references('id')->on('municipios');
=======
            $table->foreign('estados_id')->references('estados_id')->on('estados');
            $table->unsignedBigInteger('municipios_id');
            $table->foreign('municipios_id')->references('municipios_id')->on('municipios');
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
        Schema::dropIfExists('inmuebles');
    }
}
