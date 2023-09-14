<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del grupo (médico, anestesia, ayudante, sala, material, perfusión, etc.)
            $table->integer('numero_grupo'); // Número del grupo
            $table->unsignedBigInteger('manual_id'); // Cambiar a 'manual_id'
            $table->timestamps();
            $table->boolean('estado')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->foreign('manual_id')->references('id')->on('manuales'); // Cambiar a 'manual_id'
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }

}
