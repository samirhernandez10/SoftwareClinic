<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;
    protected $table = 'procedimiento';
    protected $fillable = [
        'Nbre',
        'Nbre_Soat',
        'tipoprocrips',
        'id_tipoprocedimiento',
        'Id_TipoFinProced',
        'Id_TipoConceptoAgrup',
        'manuales',
        'Paquete',
        'EsAgenda',
        'AProcEnfer',
        'C_Real',
        'C_Homologado',
        'C_Personalizado',
        'usuario_id',
        'activo',
    ];
    public function manuales()
    {
        return $this->belongsTo(Manual::class, 'manuales');
    }
    public function Id_TipoConceptoAgrup()
    {
        return $this->belongsTo(TipoConceptoAgrupProcedimiento::class, 'Id_TipoConceptoAgrup');
    }
    public function Id_TipoFinProced()
    {
        return $this->belongsTo(TipoFinProcedimeinto::class, 'Id_TipoFinProced');
    }
    public function id_tipoprocedimiento()
    {
        return $this->belongsTo(TipoProcedimiento::class, 'id_tipoprocedimiento');
    }
    public function tipoprocrips()
    {
        return $this->belongsTo(TipoProcedRips::class, 'tipoprocrips');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function paquetes()
    {
        return $this->belongsToMany(PaqueteProcedimiento::class);
    }
    
}