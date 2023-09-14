<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdTipoFinProcedTable extends Migration
{

    public function up()
    {
        Schema::create('Id_TipoFinProced', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('Nbre');
            $table->tinyInteger('EsConsulta')->default(1);
            $table->boolean('estado')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Id_TipoFinProced');
    }
}