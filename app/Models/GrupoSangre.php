<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoSangre extends Model
{
    use HasFactory;
    protected $table = 'grupo_sangre';
    protected $fillable = [
        'Nbre',
        'estado',
        'usuario_s',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}
