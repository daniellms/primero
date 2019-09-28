  {{-- {{dd(auth()->user()->roles->toArray() )}}  ejecuta solo esta linea e ignora el resto --}}

<!DOCTYPE html> 
<!-- ! y enter para autocompletar estructura basica html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <style>         /*definoun css*/   /**/
       
    </style> --}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Document</title>

</head>
<body>
   @include('layouts.app')             
    {{-- incluye lo de la visata app.blade --}}
    <header>
        <?php
             function activarMenu ($url){
                return request()-> is ($url)? 'active' :'';
            } 
        ?>
        
        <nav class="navbar">
         <li class=" fondoli">    <a class="{{request()->is('/')? 'active':''}}"  href= <?php echo route('home')?>>Home</a> </li><!--si estoy en el home uso la clase css active,lo que hace es colorear e link-->
            <!--<a class="active"  href= <php //echo route('home')?>>Home</a> -->
       <li class=" fondoli">      <a class="{{activarMenu('contactame')}}"  href= <?php echo route('contacto')?> >Contacto</a>
        <li class=" fondoli">     <a class="{{request()->is('saludo/*')? 'active':''}}" href= <?php  echo route('saludo','Invitado')?> >Saludo</a></li>
            <li class=" fondoli"> <a class="{{request()->is('mensajes/crear')? 'active':''}}"  href= <?php echo route('mensajes.crear')?> >Mensaje</a> </li>
            @if(auth()->check()) {{-- se pregunta si hay un usuario registrado --}}
            <li class=" fondoli">  <a class="{{activarMenu('mensajes/index')}}"  href= <?php echo route('mensajes.index')?> >Ver mensajes</a> </li>
            @if( auth()->user()->tieneRole (['admin']) ) {{-- poner corchetes entre la variable significa mandar un array --}}
            <li class=" fondoli">  <a class="{{activarMenu('usuarios')}}"  href= <?php echo route('usuarios.index')?> >Usuarios</a> </li>
            @endif
            @endif
          
                                                    <!-- esta va ser la que guarde en la db -->
            <!--* representa que puedo escribir cualquier valor en el parametro-->
        </nav>
    </header>
    <p> otrocorreo@gmail.com   es de role user </p>
    <p> pass= p123 </p>
    
    <!--header>nav>*3  para autocompeltar-->
    <div class="container">
            @yield('contenido')
            <!--  aca se muestra el contenido de cada pagina
            con la anotacion Arroba section('contenido')
            Arroba stop -->
            <footer>CopyRigth {{date('y')}}</footer>
    </div>
   

</body>
</html>