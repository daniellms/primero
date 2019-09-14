@extends('layout')
@section('contenido')
<h1> Hola desde mensajes usando extends contenido de layout</h1>

<h2>Escribeme</h2>
    <form method="POST" action="{{route('mensajes.store')}}">
    @csrf <!-- token formulario valido -->
     
    <label for="nombre">  
        Nombre
        <input type="text" name="nombre" value="{{old('nombre')}}"> <!--campo--> <!--old hace q no borre el nombre una ve q el form rechaza campos en blancos-->
        {!!$errors->first('nombre','<span class=error>:message</span>')!!} <!--validacion de form con el metodo mensajes de controlador-->
    </label><br>
    <label for="email">
        Email
        <input type="text" name="email" value="{{old('email')}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
    </label><br>
    <label for="mensaje">
        Mensaje
        <textarea name="mensaje"> {{old('mensaje')}} </textarea>
        {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
    </label><br>
    <input type="submit" value="Enviar">
    </form>
@stop