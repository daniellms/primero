@extends('layout')
@section('contenido')
<h1> Usuarios </h1>
<table class="table">
    {{-- table  por defecto--}}
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Role</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
              <td>{{$user -> id}} </td>
              <td>{{$user -> name}} </td>
              <td>{{$user -> email}}</td>
              <td>
                  @foreach ($user->roles as $role)
                     {{ $role->nombre_visual}} 
                  @endforeach
                  
              </td>
              {{-- <td> --}}
                
                 <td>
                    <a class="btn btn-info btn-xs"
                     href="{{ route('user.edit', $user->id) }}">Editar</a>
                 <form style="display:inline;"
                     method="POST"
                     action="{{route('user.destroy',$user->id) }}">
                     <!-- @ csrf  token formulario valido -->
                     {!! csrf_field() !!}
                    {!! method_field('DELETE') !!} {{-- esto es para q me reconozca el navegador solo para eso --}}
                    <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                 </form>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Modal
                  </button>
              </td>

          </tr>
      @endforeach
    </tbody>
</table>
{{-- aca comienza el modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
          {{-- aca agrego el formulario al modal --}}
        <label for="nombre">  
            Nombre
            <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}"> <!--campo--> <!--old hace q no borre el nombre una ve q el form rechaza campos en blancos-->
            {!!$errors->first('nombre','<span class=error>:message</span>')!!} <!--validacion de form con el metodo mensajes de controlador-->
        </label><br>
        <label for="email">
            Email
            <input class="form-control" type="text" name="email" value="{{old('email')}}">
            {!!$errors->first('email','<span class=error>:message</span>')!!}
        </label><br>
        <label for="mensaje">
            Mensaje
            <textarea class="form-control" name="mensaje">{{old('mensaje')}}</textarea>
            {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
        </label><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
@stop