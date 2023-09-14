<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaqueteProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_procedimientos', function (Blueprint $table) {
        $table->id();
        $table->string('paquetes', 30);
        $table->string('procedimiento', 25);
        $table->integer('cantidad')->default (1);
        $table->boolean('estado')->default(true);
        $table->unsignedBigInteger('usuario_id')->default (1);
        $table->timestamps();

        $table->foreign('paquetes')->references('id')->on('paquetes')->onDelete('cascade');
        $table->foreign('procedimiento')->references('id')->on('procedimiento')->onDelete('cascade');

    });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquete_procedimientos');
    }
}
