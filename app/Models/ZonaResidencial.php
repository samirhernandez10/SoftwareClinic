<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZonaResidencial extends Model
{
    use HasFactory;
    protected $table = 'zonaresidencial';
    public $incrementing = false; // Desactiva el incremento automático
    protected $keyType = 'string'; // Establece el tipo de clave primaria como string
    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'usuario_id',];

        public function barrio()
        {
            return $this->belongsTo(ZonaResidencial::class, 'zonaresidencial');
        }
        public function usuario()
     {
         return $this->belongsTo(User::class);
     }
}
