<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'id_empresa';

    protected $fillable = [
        'Apellido1',
        'Apellido2',
        'Nombre1',
        'Nombre2',
        'Nbre',
        'id_tipo_identificacion',
        'no_documento',
        'Dig_Verificacion',
        'id_municipio',
        'direccion',
        'telefono',
        'CHabilitacion',
        'movil',
        'fax',
        'correo',
        'correoFacturaElectronica',
        'contacto',
        'CodigoPresupuestal',
        'Transp',
        'categoria',
        'TipoPersona',
        'FacTInterna',
        'EsConvenioMp',
        'EsPlaboratorio',
        'EsManejoResiduos',
        'EsNomina',
        'requiereAuditoria',
        'DocComodin',
        'usuario_id',
        'activo',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function tipoIdentificacion()
    {
        return $this->belongsTo(TipoIdentificacion::class, 'id_tipo_identificacion');
    }
    public function usuario()
{
    return $this->belongsTo(User::class);
}

}