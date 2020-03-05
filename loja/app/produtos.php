<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{

    // define colunas
    protected $fillable = [
      'id', 'nome_produto', 'descricao', 'preco'
    ];

    protected $table = 'produtos';

}