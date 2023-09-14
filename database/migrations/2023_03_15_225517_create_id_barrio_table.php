<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdBarrioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_barrio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('id_municipio');
            $table->tinyInteger('zona')->default(1)->nullable(); //1:Urbano; 2:Rural //
            $table->string('id_ministerio')->nullable();
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps();


            $table->foreign('id_municipio')->references('id')->on('id_municipio');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('id_barrio');
    }
}
