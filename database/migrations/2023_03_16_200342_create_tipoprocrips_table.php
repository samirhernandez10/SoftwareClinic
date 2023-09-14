<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoprocripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoprocrips', function (Blueprint $table) {
            $table->id();
            $table->string('Nbre',200);
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
        Schema::dropIfExists('tipoprocrips');
    }
}
