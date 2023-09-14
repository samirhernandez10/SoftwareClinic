<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;
    protected $table = 'manuales';

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'estado',
        'usuario_s',
    ];
    // Atributos que deben ser convertidos a tipos nativos
     protected $casts = [
         'estado' => 'boolean',
     ];
     public function usuario()
     {
         return $this->belongsTo(User::class);
     }
}
