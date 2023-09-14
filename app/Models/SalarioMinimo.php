<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalarioMinimo extends Model
{
    use HasFactory;
    protected $table = 'salario_minimo';

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'valor',
        'anio',
        'valor_diario',
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

