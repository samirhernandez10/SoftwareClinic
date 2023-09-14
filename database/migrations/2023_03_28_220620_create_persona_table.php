<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('id_tipo_identificacion', 2);
            $table->string('no_documento', 20)->unique();
            $table->string('nombre1', 50);
            $table->string('nombre2', 50)->nullable();
            $table->string('apellido1', 50);
            $table->string('apellido2', 50)->nullable();
            $table->date('fecha_nac');
            $table->string('edad');
            $table->unsignedBigInteger('id_tipo_edad');
            $table->string('sexo',1);   
            $table->string('direccion')->nullable(); 
            $table->unsignedBigInteger('id_departamento')->nullable();
            $table->unsignedBigInteger('id_municipio')->nullable();
            $table->unsignedBigInteger('id_barrio')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('movil', 20)->nullable();
            $table->unsignedBigInteger('id_estado_civil');
            $table->string('correo')->nullable();;
            $table->unsignedBigInteger('grupo_sangre')->nullable();
            $table->tinyInteger('rh')->default(1)->nullable(); //1:Positivo; 2:Negativo 
            $table->string('codigo1sap', 50)->nullable();
            $table->string('NAfiliacion', 50)->nullable();
            $table->string('zonaresidencial',1); 
            $table->unsignedBigInteger('id_etnia');
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('convenios')->nullable();
            $table->boolean('estado')->default(true); // Estado activo o inactivo
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->timestamps(); //fecha 
            // Claves foráneas
            $table->foreign('id_tipo_identificacion')->references('id')->on('id_tipo_identificacion');
            $table->foreign('sexo')->references('id')->on('sexo');
            $table->foreign('zonaresidencial')->references('id')->on('zonaresidencial');
            $table->foreign('id_tipo_edad')->references('id')->on('id_tipo_edad');
            $table->foreign('id_departamento')->references('id')->on('id_departamento');
            $table->foreign('id_municipio')->references('id')->on('id_municipio');
            $table->foreign('id_barrio')->references('id')->on('id_barrio');
            $table->foreign('id_estado_civil')->references('id')->on('id_estado_civil');
            $table->foreign('id_etnia')->references('id')->on('id_etnia');
            $table->foreign('id_empresa')->references('id')->on('id_empresa');
            $table->foreign('convenios')->references('id')->on('convenios');
            $table->foreign('grupo_sangre')->references('id')->on('grupo_sangre');
            

        });
        
    }
    public function down()
    {
        Schema::dropIfExists('persona');
    }

 
}
