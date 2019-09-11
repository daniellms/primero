@extends('layout')
@section('contenido')
<h1>Saludos a {{$nombre}} </h1>
<ul>
    @forelse($consolas as $consola)
    <li> {{$consola}}</li>
    @empty
    <p>No hay elementos en la tabla</p>
    @endforelse
</ul>
@stop
<!--<!DOCTYPE html>-->    <!--con ! y la primera opcion me genera la estructurabasica de html-->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vista</title>
</head>
<body>
    {!! $ver !!}  el codigp no es escapado, y muestra el valor de la variable-->
    <!-- {!! $jscript!!} -->
    <ul>
       <!-- @foreach($consolas as $consola)
        <li>{!!$consola!!} </li>

        @endforeach   anda de 10 FOREACH -->
        <!-- @forelse($consolas as  $consola)
        <li>{{$consola}}</li>
        @empty
        <p>No hay consolas , array vacio</p>
        @endforelse

        @if(count($consolas)===1)
            <p>Solo tiene un elemento en el array<p>
        @elseif(count($consolas)>1)
            <p>Tenes varios elementos en el array </p>
        @else   
            <p>No hay elementos en la lista</p>
        @endif -->

    <!-- </ul>
    <h1>hola desde vista<h1>
    <br>
    <h1>Saludos para <?php //echo $nombre;?></h1>
    <h1>Saludando desde la sintaxis de blade a {{$nombre}}</h1>
</body>
</html> --> 