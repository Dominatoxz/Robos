<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Estoque extends Model
{
    protected $fillable = [
        'robo_id', 'nome', 'fornecedor', 'preco', 'nivel_minimo', 'tipo',
    ];

    public function Produto(){
        return $this->belongsTo(Produto::class, ['robo_id']);
    }
}
