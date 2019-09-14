
<!DOCTYPE html> 
<!-- ! y enter para autocompletar estructura basica html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>         /*definoun css*/   /**/
        .active{                    /*defino una clase para css*/
            text-decoration:none;
            color: green;
        }
        .error{
            color:red;
            font-size:12px;
        }
    </style>

    <title>Document</title>

</head>
<body>
    <h1>Mi Sitio, usando la plantilla layout.blade</h1>
    <h1>{{request()-> is ('/') ? 'Estas en el home': 'No estas en el home'}} </h1> <!--? indica una condicional q se pregunta si esta en esa ruta imprime 'el primer mensaje', sino : 'el segundo'-->
             <!--url()ver ruta-->
    <header>
        <?php
             function activarMenu ($url){
                return request()-> is ($url)? 'active' :'';
            } 
        ?>
        
        <nav>
            <a class="{{request()->is('/')? 'active':''}}"  href= <?php echo route('home')?>>Home</a> <!--si estoy en el home uso la clase css active,lo que hace es colorear e link-->
            <!--<a class="active"  href= <php //echo route('home')?>>Home</a> -->
            <a class="{{activarMenu('contactame')}}"  href= <?php echo route('contacto')?> >Contacto</a>
            <a class="{{request()->is('saludo/*')? 'active':''}}" href= <?php  echo route('saludo','Daniel')?> >Saludo</a>
            <a class="{{activarMenu('contactame')}}"  href= <?php echo route('mensajes.crear')?> >Mensaje</a> 
                                                    <!-- esta va ser la que guarde en la db -->
            <!--* representa que puedo escribir cualquier valor en el parametro-->
        </nav>
    </header>
    <!--header>nav>*3  para autocompeltar-->

    @yield('contenido')
    <!-- supongo que aca se muestra el contenido de cada pagina
    con la anotacion Arroba section('contenido')
    Arroba stop -->
    <footer>CopyRigth {{date('y')}}</footer>

</body>
</html>