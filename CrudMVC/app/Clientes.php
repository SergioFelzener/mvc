<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    // php artisan make:migration cria_tabela_clientes --create=Clientes

    // Define as colunas
    protected $fillable = ['id', 'nome', 'email', 'endereco'];

    // Nome da tabela
    protected $table = 'clientes';
}
