<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    // define colunas
    protected $fillable = [
        'id', 'nome_categoria'
    ];

    protected $table = 'categorias';
}
