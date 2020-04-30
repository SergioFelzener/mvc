@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 style="text-align: center">Logado com sucesso!</h1>
                    <hr>
                    <br>
                    <a href="/clientes/listar">Lista de clientes</a> <br>
                    <a href="/produtos/adicionar">Adicionar produto</a> <br>
                    <a href="/produtos/listar">Lista de produtos</a> <br>
                    <a href="/categorias/adicionar">Adicionar categoria</a> <br>
                    <a href="/categorias/listar">Lista de categoria</a> <br>
                    <a href="/users">Lista de Usuarios</a> <br>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
