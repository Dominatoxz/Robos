<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'numero_serie', 'compatibilidade', 'tempo_vida', 'loc', 'quantidade',
    ];

    public function Estoque(){
        return $this->hasMany(Estoque::class);
    }
}
