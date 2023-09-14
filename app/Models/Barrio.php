<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Municipio;


class Barrio extends Model
{
    use HasFactory;
    protected $table = 'id_barrio';
    protected $fillable = [
        'nombre',
        'id_municipio',
        'zona',
        'id_ministerio',
        'estado',
        'usuario_id',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
    protected $hidden = [];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }
    public function zona()
    {
        return $this->belongsTo(ZonaResidencial::class, 'zonaresidencial');
    }

    public function usuario()
{
    return $this->belongsTo(User::class);
}

}
