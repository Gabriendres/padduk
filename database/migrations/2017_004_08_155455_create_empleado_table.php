<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEmpleadoTable extends Migration
{
  
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Empleadoid')->unsigned()->index();
            $table->integer('Empresaid')->unsigned()->index();
            $table->string('Nombres', '100')->nullable();
            $table->string('Apellidos', '100')->nullable();
			$table->integer('Cedula');
			$table->string('Area', '100')->nullable();
			$table->integer('Sueldo');
			$table->integer('Telefono');
            $table->timestamps();
        });
    }
  
    public function down()
    {
        Schema::drop('empleado');
    }
}