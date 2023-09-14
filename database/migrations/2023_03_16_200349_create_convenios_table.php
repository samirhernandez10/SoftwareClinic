<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empresa');
            $table->string('nombre_convenio');
            $table->string('crips');
            $table->unsignedBigInteger('manuales');
            $table->unsignedBigInteger('tipo_regimen');
            $table->unsignedBigInteger('tipo_contratacion');
            $table->unsignedBigInteger('tipo_aseguramiento');
            $table->unsignedBigInteger('tipo_plan');
            $table->tinyInteger('es_capitado')->default(0);
            $table->tinyInteger('valida_codigo_autorizacion')->default(0);
            $table->boolean('estado')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps();

            $table->foreign('id_empresa')->references('id')->on('id_empresa');
            $table->foreign('tipo_regimen')->references('id')->on('tipo_regimen');
            $table->foreign('tipo_contratacion')->references('id')->on('tipo_contratacion');
            $table->foreign('tipo_aseguramiento')->references('id')->on('tipo_aseguramiento');
            $table->foreign('tipo_plan')->references('id')->on('tipo_plan');
            $table->foreign('manuales')->references('id')->on('manuales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convenios');
    }
}
