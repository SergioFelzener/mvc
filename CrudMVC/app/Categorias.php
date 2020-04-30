<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
     // Define as colunas
     protected $fillable = ['id', 'name', 'description'];

     // Nome da tabela
     protected $table = 'categorias';
}
