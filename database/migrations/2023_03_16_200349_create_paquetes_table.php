<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('nombre', 300)->nullable();
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

        });   
    }

    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
}

