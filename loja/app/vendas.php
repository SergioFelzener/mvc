<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable =['id', 'cliente_id', 'data_da_venda', 'vendedor_id'];

    protected $table='vendas';

    public function notaFiscal(){
        return $this->hasOne(NotasFiscais::class, 'venda_id');
    }

    public function produtosVenda(){
        return $this->hasMany(ProdutosVenda::class, 'id');
    }

    public function VendedorhasVenda(){
        return $this->hasOne(Vendedores::class, 'id');

    }
    public function Venda(){

        return $this->hasManyThrough(Produtos::class,'id');
    }


}
