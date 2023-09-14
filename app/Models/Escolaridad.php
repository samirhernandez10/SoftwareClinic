<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Escolaridad extends Model
{
    use HasFactory;

    protected $table = 'escolaridad';
    protected $primaryKey = 'id';
    public $incrementing = false;


    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'id',
        'nombre',
        'activo',
        'usuario_s',
    ];
    public function persona()
    {
        return $this->hasMany(Persona::class, 'persona');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
    // Atributos que deben ser convertidos a tipos nativos
    protected $casts = [
        'estado' => 'boolean',
    ];

}
