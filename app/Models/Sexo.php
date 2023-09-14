<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = 'sexo';
    public $incrementing = false; // Desactiva el incremento automático
    protected $keyType = 'string'; // Establece el tipo de clave primaria como string
    protected $fillable = [
        'id',
        'nombre',
        'activo',
        'usuario_id',
    ];
    public function usuario()
{
    return $this->belongsTo(User::class);
}
}
