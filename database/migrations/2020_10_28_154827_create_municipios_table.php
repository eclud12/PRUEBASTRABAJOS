<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2020_10_24_194821_create_municipios_table.php
            $table->bigIncrements('id');
            $table->String('municipio', 45);
=======
            $table->Increments('id');
            $table->string('municipio');
>>>>>>> 37fc2ef055f1fa73b425dca3d07d48405e90d622:database/migrations/2020_10_28_154827_create_municipios_table.php
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
        Schema::dropIfExists('municipios');
    }
}
