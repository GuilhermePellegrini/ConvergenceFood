<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'loja_id',
        'users_id',
        'endereco_id',
        'note',
        'cpf',
        'price',
        'discount',
        'cupom_id',
        'accept',
        'reason_refusal',
        'delivery',
    ];

    public function loja()
    {
        return $this->hasOne(Loja::class); 
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}
