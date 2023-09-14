<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('begin', function (Blueprint $table) {
            $table->string('id', 1)->primary();
            $table->string('nombre'); // Nombre del manual (SOAT, ISS 2001, etc.)
            $table->boolean('activo')->default(true); // Estado activo o inactivo
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
        Schema::dropIfExists('begin');
    }
}
