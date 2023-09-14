<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDiagnostico extends Model
{
    use HasFactory;
    protected $table = 'tipodiagnostico';
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
