@extends('layout')
@section('contenido')
<h1>Mensaje</h1>
    <p>Enivado por {{$mensaje->nombre}} - {{$mensaje->email}}</p>
    <p>{{$mensaje->mensaje}}</p>

@stop
