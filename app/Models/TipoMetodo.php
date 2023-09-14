<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMetodo extends Model
{
    use HasFactory;
    protected $table = 'Id_TipoMetodo';

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'Nbre',
        'estado',
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
