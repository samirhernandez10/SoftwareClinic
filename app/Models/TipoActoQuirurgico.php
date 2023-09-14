<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActoQuirurgico extends Model
{
    use HasFactory;
    protected $table = 'tipoactoquirurgico';
    protected $fillable = [
        'nombre',
        'estado',
        'usuario_id',];
        protected $casts = [
            'estado' => 'boolean',
        ];
        public function usuario()
     {
         return $this->belongsTo(User::class);
     }
}
