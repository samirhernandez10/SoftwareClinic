<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TipoIdentificacion;
use App\Models\Barrio;
use App\Models\Departamento;
use App\Models\EstadoCivil;
use App\Models\Sexo;
use App\Models\TipoEdad;
use App\Models\Etnia;



class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

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
        'codigo1sap',
        'id_etnia',
        'estadoeps',
        'usuario_id'
    ];

    public function tipo_identificacion()
    {
        return $this->belongsTo('App\Models\IdTipoIdentificacion', 'id_tipo_identificacion');
    }

    public function sexo()
    {
        return $this->belongsTo('App\Models\IdSexo', 'id_sexo');
    }

    public function tipo_edad()
    {
        return $this->belongsTo('App\Models\IdTipoEdad', 'id_tipo_edad');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Models\IdMunicipio', 'id_municipio');
    }

    public function barrio()
    {
        return $this->belongsTo('App\Models\IdBarrio', 'id_barrio');
    }

    public function estado_civil()
    {
        return $this->belongsTo('App\Models\IdEstadoCivil', 'id_estado_civil');
    }

    public function etnia()
    {
        return $this->belongsTo('App\Models\IdEtnia', 'id_etnia');
    }
}

