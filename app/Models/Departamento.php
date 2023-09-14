<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'id_departamento';
    protected $primaryKey = 'id';
    public $incrementing = false;


    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'codpais',
        'usuario_s',
    ];
    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'id_departamento');
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
