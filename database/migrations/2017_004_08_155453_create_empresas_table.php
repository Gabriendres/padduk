<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEmpresasTable extends Migration
{
   
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Empresaid', 36)->unique();
            $table->string('Nombre', '100')->nullable();
            $table->string('Ciudad', '100')->nullable();
			$table->integer('Telefono');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}