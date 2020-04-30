@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
            
            @foreach ($categorias as $categoria)
            <tr>
                <td>
                    {{ $categoria->name }}
                </td>
                
                <td>
                    {{$categoria->description}}
                </td>
            </tr>    
            @endforeach
            
        </table>

    </div>
</div>


@endsection