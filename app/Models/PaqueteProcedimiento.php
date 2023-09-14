<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaqueteProcedimiento extends Model
{
    protected $table = 'paquete_procedimientos';

      protected $fillable = [
      'paquetes', 
      'procedimiento', 
      'cantidad',
      'usuario_id',
      'estado',
    ];

      public function paquete()
      {
          return $this->belongsTo(Paquetes::class,'paquetes');
      }
  
      public function procedimientos()
      {
          return $this->belongsTo(Procedimiento::class, 'procedimiento');
      }
    public function usuario()
{
    return $this->belongsTo(User::class);
}
}
