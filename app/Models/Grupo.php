<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = [
        'nombre',
        'numero_grupo',
        'manual_id',
    ];


    public function manual()
    {
        return $this->belongsTo(Manual::class);
    }
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
}
