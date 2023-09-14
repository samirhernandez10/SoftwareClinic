<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarioMinimoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
        public function up()
    {
        Schema::create('salario_minimo', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2);
            $table->year('anio');
            $table->decimal('valor_diario', 8, 2);
            $table->boolean('estado')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
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
        Schema::dropIfExists('salario_minimo');
    }
}
