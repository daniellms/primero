@extends('layout')
@section('contenido')
<h1> Hola desde mensajes usando extends contenido de layout</h1>

<h2>Editar mensaje de {{$mensaje->nombre}}</h2>

    
     <form method="POST" action="{{route('mensajes.update',$mensaje->id)}}">
        {!!method_field('PUT')!!} {{-- esto es para q me reconozca el navegador solo para eso --}}
        
        @csrf <!-- token formulario valido -->
     
        <label for="nombre">  
        Nombre
        <input class="form-control" type="text" name="nombre" value="{{$mensaje->nombre}}"> <!--campo--> <!--old hace q no borre el nombre una ve q el form rechaza campos en blancos-->
        {!!$errors->first('nombre','<span class=error>:message</span>')!!} <!--validacion de form con el metodo mensajes de controlador-->
        </label><br>
        <label for="email">
        Email
        <input class="form-control" type="text" name="email" value="{{$mensaje->email}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
         </label><br>
        <label for="mensaje">
        Mensaje
        <textarea class="form-control" name="mensaje"> {{$mensaje->mensaje}} </textarea>
        {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
     </label><br>
        <input class="btn btn-primary" type="submit" value="Enviar"> 
    </form>
@stop