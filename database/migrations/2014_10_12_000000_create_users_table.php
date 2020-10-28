<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
            $table->Increments('id');
>>>>>>> 37fc2ef055f1fa73b425dca3d07d48405e90d622
            $table->string('nombre');
            $table->string('primer_apellido', 45);
            $table->string('segundo_apellido', 45);
            $table->string('numero_celular',45);
            $table->string('correo')->unique();
            $table->timestamp('correo_verified_at')->nullable();
            $table->string('contraseña');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
