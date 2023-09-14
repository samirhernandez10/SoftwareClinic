<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdTipoprocedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_tipoprocedimiento', function (Blueprint $table) {
            $table->id();
            $table->string('Nbre');
            $table->tinyInteger('valorAmb')->default(1); //Para identificar si se muestra en el modulo ambulatorio//
            $table->boolean('estado')->default(1); 
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
        Schema::dropIfExists('id_tipoprocedimiento');
    }
}
