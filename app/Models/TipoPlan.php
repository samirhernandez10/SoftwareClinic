<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlan extends Model
{
    use HasFactory;
    protected $table = 'tipo_plan';
    protected $fillable = [
        'nombre',
        'estado',
        'usuario_s',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
