<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CausaExterna extends Model
{
    use HasFactory;
    protected $table = 'causas_externas';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'activo',
        'usuario_id',
    ];
    public function usuario()
{
    return $this->belongsTo(User::class);
}

}
