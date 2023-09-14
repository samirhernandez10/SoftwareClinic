<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoPaciente extends Model
{
    use HasFactory;

    protected $table = 'ingreso_paciente';

    protected $fillable = [
        'id_tipo_identificacion',
        'no_documento',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'id_sexo',
        'fecha_nac',
        'edad',
        'id_tipo_edad',
        'id_municipio',
        'id_barrio',
        'direccion',
        'telefono',
        'movil',
        'id_estado_civil',
        'correo',
        'grupo_sangre',
        'rh',
        'id_etnia',
        'n_afiliacion',
        'estado_eps',
    ];

    public function tipo_identificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class, 'id_tipo_identificacion');
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'id_sexo');
    }

    public function tipo_edad()
    {
        return $this->belongsTo(TipoEdad::class, 'id_tipo_edad');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }

    public function barrio()
    {
        return $this->belongsTo(Barrio::class, 'id_barrio');
    }

    public function estado_civil()
    {
        return $this->belongsTo(EstadoCivil::class, 'id_estado_civil');
    }

    public function etnia()
    {
        return $this->belongsTo(Etnia::class, 'id_etnia');
    }
}