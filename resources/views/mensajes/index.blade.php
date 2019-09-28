@extends('layout')
@section('contenido')
<h1> Hola desde mensajes usando extends contenido de layout</h1>

<h2>Tabla de mensajes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $mensaje)
            <tr>
                <td>{{ $mensaje->id }}</td>
                <td>
                    <a href="{{route('mensajes.show' , $mensaje->id)}}">
                    {{ $mensaje->nombre }}</td>
                    </a>
                <td>{{$mensaje->mensaje}}</td>
                 <td>
                    <a class="btn btn-info btn-xs" href="{{ route('mensajes.edit', $mensaje->id) }}">Editar</a>
                 <form style="display:inline;" method="POST" action="{{route('mensajes.destroy',$mensaje->id) }}">
                     <!-- @ csrf  token formulario valido -->
                     {!! csrf_field() !!}
                    {!! method_field('DELETE') !!} {{-- esto es para q me reconozca el navegador solo para eso --}}
                    <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                 </form>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ route('mensajes.edit') }}" type="button">Editar</a> --}}
@stop