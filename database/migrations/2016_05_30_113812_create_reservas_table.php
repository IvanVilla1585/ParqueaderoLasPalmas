<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Reservas', function (Blueprint $table) {
          $table->increments('id');
          $table->date('fecha_ingreso');
          $table->date('fecha_salida');
          $table->string('placa_vehiculo', 10);
          $table->string('tipo', 10)->nullable();
          $table->string('nombres', '100');
          $table->string('apellidos', '100')->nullable();
          $table->string('email')->nullable();
          $table->string('movil', 20)->nullable();
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
        Schema::drop('Reservas');
    }
}
