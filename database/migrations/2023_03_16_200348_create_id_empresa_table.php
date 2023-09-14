<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_empresa', function (Blueprint $table) {
            $table->id();
            $table->string('Apellido1', 200)->nullable();
            $table->string('Apellido2', 200)->nullable();
            $table->string('Nombre1', 200)->nullable();
            $table->string('Nombre2', 200)->nullable();
            $table->string('Nbre', 150);
            $table->string('id_tipo_identificacion', 2);
            $table->string('no_documento', 30)->unique();
            $table->string('Dig_Verificacion')->nullable();
            $table->string('id_municipio')->nullable();
            $table->string('id_departamento');
            $table->string('direccion')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('CHabilitacion', 20)->nullable();
            $table->string('movil', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('correo')->nullable();
            $table->string('correoFacturaElectronica');
            $table->string('contacto')->nullable();
            $table->string('CodigoPresupuestal')->nullable(); //Codigo Presupuestal//
            $table->tinyInteger('Transp')->default(0)->nullable(); //1:Si;0:No//
            $table->tinyInteger('categoria')->default(0)->nullable(); //0:Empresa;1:eps; 2:Arl //
            $table->tinyInteger('TipoPersona')->default(0)->nullable(); //0:natural;1:juridica//
            $table->tinyInteger('FacTInterna')->default(0)->nullable(); //0:No;1:Si//
            $table->tinyInteger('EsConvenioMp')->default(0)->nullable(); //0:No;1:Si//
            $table->tinyInteger('EsPlaboratorio')->default(0)->nullable(); //0:No;1:Si//
            $table->tinyInteger('EsManejoResiduos')->default(0)->nullable(); //0:No;1:Si// clasificacion manejo de residuos
            $table->tinyInteger('EsNomina')->default(0)->nullable(); //0:No;1:Si// Variable para el manejo de nomina
            $table->tinyInteger('requiereAuditoria')->default(0)->nullable(); //0:No;1:Si// variable para activar causacion 
            $table->string('DocComodin')->nullable()->nullable();
            $table->boolean('activo')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id')->nullable();; // Usuario que lo creó
            $table->timestamps();

             // Claves foráneas
             $table->foreign('id_tipo_identificacion')->references('id')->on('id_tipo_identificacion');
             $table->foreign('id_municipio')->references('id')->on('id_municipio');
             $table->foreign('id_departamento')->references('id')->on('id_departamento');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_empresa');
    }
}
