<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Paquetes extends Model
{
    use HasFactory;
    protected $table = 'paquetes';
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'estado',
        'usuario_id',
        
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    
    public function procedimientos()
    {
        return $this->belongsToMany(Procedimiento::class, 'paquete_procedimientos')->withPivot('cantidad');
    }

    public function usuario()
{
    return $this->belongsTo(User::class);
}
    
}

