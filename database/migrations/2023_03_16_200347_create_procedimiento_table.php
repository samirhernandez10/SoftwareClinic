<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimiento', function (Blueprint $table) {
            $table->string('id', 25)->primary();
            $table->string('Nbre', 700)->nullable();
            $table->string('Nbre_Soat', 700)->nullable();
            $table->unsignedBigInteger('tipoprocrips')->nullable();
            $table->unsignedBigInteger('id_tipoprocedimiento')->nullable();
            $table->string('Id_TipoFinProced', 2)->nullable();
            $table->string('Id_TipoConceptoAgrup', 2)->nullable();
            $table->unsignedBigInteger('manuales')->nullable();
            $table->tinyInteger('Paquete')->default(1)->nullable(); //1:Si;0:No//
            $table->tinyInteger('EsAgenda')->default(1)->nullable(); //1:Si;0:No//
            $table->tinyInteger('AProcEnfer')->default(1)->nullable(); //1:Si;0:No//
            $table->string('C_Real', 20)->nullable();
            $table->string('C_Homologado', 20)->nullable();
            $table->string('C_Personalizado', 20)->nullable();
            $table->boolean('activo')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id')->nullable(); // Usuario que lo creó
            $table->timestamps();

            $table->foreign('Id_TipoFinProced')->references('id', 2)->on('Id_TipoFinProced')->onDelete('cascade');
            $table->foreign('Id_TipoConceptoAgrup')->references('id', 2)->on('Id_TipoConceptoAgrup')->onDelete('cascade');
            $table->foreign('tipoprocrips')->references('id')->on('tipoprocrips')->onDelete('cascade');
            $table->foreign('id_tipoprocedimiento')->references('id')->on('id_tipoprocedimiento')->onDelete('cascade');
            $table->foreign('manuales')->references('id')->on('manuales')->onDelete('cascade');

        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimiento');
    }
}
