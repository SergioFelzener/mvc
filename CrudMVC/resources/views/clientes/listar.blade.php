@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <table>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
            </tr>

            @foreach ($clientes as $cliente)
                <tr>
                    <td>
                        {{ $cliente->name }}
                    </td>

                    <td>
                        {{$cliente->address}}
                    </td>
                </tr>    
            @endforeach

        </table>
    </div>
</div>
@endsection