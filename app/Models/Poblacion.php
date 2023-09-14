<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Poblacion extends Model
{
    use HasFactory;

    protected $table = 'id_poblacion';

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'estado',
        'usuario_s',
    ];
     // Atributos que deben ser ocultados para las matrices

     // Atributos que deben ser convertidos a tipos nativos
     protected $casts = [
         'estado' => 'boolean',
     ];
     public function usuario()
    {
        return $this->belongsTo(User::class);
    }
 }
