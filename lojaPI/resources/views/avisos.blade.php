@extends('layouts.externo')
@section('title', 'Quadro de avisos da empresa' )
@section('sidebar')
    @parent
    <p>ˆ^Barra superior adicionada do layout pai/mae ˆ^</p>
@endsection

@section('content')
    <p>Quadro de avisos da empresa</p>
    <br>
    <p>Olá , {{$nome}} ! Veja abaixo os avisos de Hoje: </p>

    @if($mostrar)
        Mostrando Aviso
    @else
        Esconde Aviso
    @endif

@foreach ($avisos as $aviso)
<p>Aviso {{$aviso['id']}}: {{$aviso['texto']}}</p>
@endforeach

<?php

foreach($avisos as $aviso){

    echo"<p> Aviso {$aviso['id']}: {$aviso['texto']}</p>";
}
?>

@php

foreach($avisos as $aviso){

    echo"<p> Aviso {$aviso['id']}: {$aviso['texto']}</p>";
}
@endphp

@endsection
