<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cep',
        'address',
        'district',
        'number',
        'complement',
        'cidade_id',
        'estado_id',
    ];

    public function cidade()
    {
        return $this->hasOne(Cidade::class, 'id');
    }

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id');
    }
}
