<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable =['id', 'nome', 'email', 'endereco', 'telefone'];

    protected $table='Clientes';

    public function vendas(){

        return $this->hasMany(vendas::class, 'cliente_id');
        
    }
}
