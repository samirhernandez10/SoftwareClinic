<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;
    protected $table = 'convenios';

    protected $fillable = [
        'id_empresa',
        'nombre_convenio',
        'crips',
        'manuales',
        'tipo_regimen',
        'tipo_contratacion',
        'tipo_aseguramiento',
        'tipo_plan',
        'es_capitado',
        'valida_codigo_autorizacion',
        'estado',
        'usuario_id'
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];

    public function empresa()
{
    return $this->belongsTo(Empresa::class, 'id_empresa');
}


public function manual()
{
    return $this->belongsTo(Manual::class, 'manuales');
}
public function tiporegimen()
{
    return $this->belongsTo(TipoRegimen::class, 'tipo_regimen');
}
public function tipocontratacion()
{
    return $this->belongsTo(TipoContratacion::class, 'tipo_contratacion');
}
public function tipoaseguramiento()
{
    return $this->belongsTo(TipoAseguramiento::class, 'tipo_aseguramiento');
}
public function tipoplan()
{
    return $this->belongsTo(TipoPlan::class, 'tipo_plan');
}
    public function usuario()
     {
         return $this->belongsTo(User::class);
     }
}
