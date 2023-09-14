<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    use HasFactory;
    protected $table = 'id_tipo_identificacion';
public $incrementing = false; // Desactiva el incremento automático
protected $keyType = 'string'; // Establece el tipo de clave primaria como string

protected $fillable = [
    'id',
    'nombre',
    'activo',
    'Id_Dian',
    'usuario_id',
];

// Relación con la tabla de usuarios


public function usuario()
{
    return $this->belongsTo(User::class);
}

}