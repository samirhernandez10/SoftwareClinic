<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Begin extends Model
{
    use HasFactory;
    protected $table = 'begin';
    protected $fillable = [
        'nombre',
        'activo',
        
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}
