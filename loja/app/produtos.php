<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    // define colunas
    protected $fillable = [
        'id', 'nome_produto', 'descricao', 'preco'
    ];

    protected $table = 'Produtos';
}