<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFinProcedimeinto extends Model
{
    use HasFactory;
    protected $table = 'Id_TipoFinProced';
    protected $primaryKey = 'id';
    public $incrementing = false;
    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'id',
        'Nbre',
        'estado',
        'EsConsulta',
        'usuario_id',
    ];
     // Atributos que deben ser ocultados para las matrices
     protected $hidden = [];

     // Atributos que deben ser convertidos a tipos nativos
     protected $casts = [
         'estado' => 'boolean',
     ];
     public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
