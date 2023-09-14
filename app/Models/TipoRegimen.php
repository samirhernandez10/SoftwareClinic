<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRegimen extends Model
{
    use HasFactory;
    protected $table = 'tipo_regimen';
    protected $fillable = [
        'nombre',
        'idripsregimen',
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
