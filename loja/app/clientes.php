<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    // define colunas
    protected $fillable = [
        'id', 'nome', 'email', 'status'
    ];

    protected $table = 'clientes';
}