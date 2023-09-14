<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConceptoAgrupProcedimiento extends Model
{
    use HasFactory;
   
    protected $table = 'Id_TipoConceptoAgrup';
    protected $primaryKey = 'id';
    public $incrementing = false;

    // Atributos que pueden ser asignados masivamente
    protected $fillable = [
        'id',
        'Nbre',
        'estado',
        'usuario_id',
    ];
     // Atributos que deben ser ocultados para las matrices
 
     public function usuario()
{
    return $this->belongsTo(User::class);
}
}
