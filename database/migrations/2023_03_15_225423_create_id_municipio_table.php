<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_municipio', function (Blueprint $table) {
            $table->string('id', 5)->primary();
            $table->string('nombre');
            $table->string('id_departamento');
            $table->string('cod_sucursal')->nullable();
            $table->string('v_taxi')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps();



            $table->foreign('id_departamento')->references('id')->on('id_departamento');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_municipio');
    }
}
