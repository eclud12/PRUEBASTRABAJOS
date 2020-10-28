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
        Schema::create('ventas', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
            $table->Increments('id');
            $table->string('idusers', 11);
            $table->string('idinmueble', 11);
>>>>>>> 37fc2ef055f1fa73b425dca3d07d48405e90d622
            $table->String('tipo_inmueble', 45);
            $table->String('total_de_venta', 45);
            $table->String('forma_De_pago', 45);
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
