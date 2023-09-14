<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TipoEdad extends Model
{
    use HasFactory;

    protected $table = 'id_tipo_edad';

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'estado',
        'usuario_s',
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
    // Aquí puedes agregar más propiedades y métodos específicos del modelo Sexo
}
