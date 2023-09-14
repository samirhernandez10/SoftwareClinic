<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    use HasFactory;
    protected $table = 'patologias';
    protected $fillable = [
        'id',
        'sexo',
        'limite_inf',
        'limite_sup',
        'capitulo',
        'nombre_capitulo',
        'codigo_grupo_patologia',
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';
    public function usuario()
     {
         return $this->belongsTo(User::class);
     }
}
