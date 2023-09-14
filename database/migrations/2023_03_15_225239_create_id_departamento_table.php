<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_departamento', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('nombre');
            $table->string('codpais');
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('id_departamento');
    }
}
