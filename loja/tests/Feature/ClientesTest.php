<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Clientes;

class ClientesTest extends TestCase
{

    use DatabaseTransactions;

    public function testCreate(){
        $cliente = Clientes::create([
            'nome'=> 'Bono Teste',
            'endereco'=> 'platenta terra',
            'email'=> 'bono@test.com',
            'telefone'=> '11945673345',
        ]);
        $this->assertDatabaseHas('Clientes', ['nome'=>'Bono Teste']);

        //$cliente->destroy($cliente->id);

        //$this->assertDatabaseMissing('Clientes', ['nome'=> 'Bono Teste']);
    }
}
