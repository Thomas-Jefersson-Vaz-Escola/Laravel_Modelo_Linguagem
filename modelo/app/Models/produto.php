<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillables = [
        'categoria_id',
        'nome_produto',
        'valor_produto',
        'vencimento_produto',
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
