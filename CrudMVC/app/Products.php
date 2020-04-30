<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // Define as colunas
    protected $fillable = ['id', 'name', 'description', 'price'];

    // Nome da tabela
    protected $table = 'products';
}
