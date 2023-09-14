<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoIdentificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_tipo_identificacion', function (Blueprint $table) {
            $table->string('id', 2)->primary(); // Establecer la clave primaria como string
            $table->string('nombre');
            $table->boolean('activo')->default(true); // Estado activo o inactivo
            $table->string('Id_Dian')->nullable(); // Agregar la columna Id_Dian como nullable
            $table->unsignedBigInteger('usuario_id'); // Usuario que lo creó
            $table->foreign('usuario_id')->references('id')->on('users'); // Llave foránea a la tabla de usuarios
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('id_tipo_identificacion');
    }
}
