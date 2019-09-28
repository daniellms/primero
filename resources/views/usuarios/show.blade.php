@extends('layout')
@section('contenido')
    <h1>{{$user->name}}</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>@foreach ($user->roles as $role)
                {{$role->nombre_control}}
            @endforeach</td>
        </tr>
    </table>
    @can('edit',$user) {{-- directiva de blade 1er parametro habildad, 2do el modelo --}}
    <a href="{{route('usuarios.edit',$user->id)}}" class="btn btn-info">Editar</a>
    @endcan
@stop