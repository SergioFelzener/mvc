<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    // define colunas
    protected $fillable = [
        'id', 'nome', 'quantidade', 'status'
    ];

    protected $table = 'estoque';
}
