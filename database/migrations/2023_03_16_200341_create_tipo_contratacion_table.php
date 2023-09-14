<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContratacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_contratacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('idresolucion014');
            $table->string('idresolucion084');
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
        Schema::dropIfExists('tipo_contratacion');
    }
}
