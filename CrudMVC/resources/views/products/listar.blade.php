@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
            
            @foreach ($produtos as $produto)
            <tr>
                <td>
                    {{ $produto->name }}
                </td>
                
                <td>
                    {{$produto->description}}
                </td>
                
                <td>
                    {{$produto->price}}
                </td>
            </tr>    
            @endforeach
            
        </table>

    </div>
</div>


@endsection