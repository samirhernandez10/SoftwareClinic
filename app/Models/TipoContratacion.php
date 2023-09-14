<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContratacion extends Model
{
    use HasFactory;
    protected $table = 'tipo_contratacion';
    protected $fillable = [
        'nombre',
        'crips',
        'idresolucion014',
        'idresolucion084',
        'estado',
        'usuario_id'
    ];
    public function usuario()
     {
         return $this->belongsTo(User::class);
     }

}
