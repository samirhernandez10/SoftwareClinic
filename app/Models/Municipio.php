<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;
use App\Models\User;


class Municipio extends Model
{
    use HasFactory;

    protected $table = 'id_municipio';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'nombre',
        'id_departamento',
        'cod_sucursal',
        'v_taxi',
        'codigo_postal',
        'estado',
        'usuario_id',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    protected $hidden = [];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
    
    public function usuario()
{
    return $this->belongsTo(User::class);
}

}
