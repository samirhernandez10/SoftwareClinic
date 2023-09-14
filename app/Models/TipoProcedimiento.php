<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoProcedimiento extends Model
{
    use HasFactory;
    protected $table = 'id_tipoprocedimiento';

    protected $fillable = [
        'Nbre',
        'valorAmb',
        'estado',
        'usuario_id',
    ];
    protected $casts = [
        'estado' => 'boolean',
    ];
  
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
}
