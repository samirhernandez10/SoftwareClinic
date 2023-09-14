<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patologias', function (Blueprint $table) {
            $table->string('id', 4)->unique();
            $table->string('nombre', 700);
            $table->enum('sexo', ['A', 'M', 'F'])->default('A');
            $table->tinyInteger('LimInf')->default(0);
            $table->smallInteger('LimSup')->default(599);
            $table->string('Capitulo', 3)->nullable();
            $table->string('NombreCapitulo', 700)->nullable();
            $table->string('CodigoGrupoPatologia')->nullable();
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('patologias');
    }
}
