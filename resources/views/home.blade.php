<?php
// echo "<a href=" .route('contacto'). ">Contacto</a><br>"; //referencio el nombre de la ruta en vez de la ruta en si
// echo "<a href=" .route('contacto'). ">Contacto</a><br>"; // llama alnombre de la ruta
// echo "<a href='contactos'>Contacto</a><br>"; // esta no va a andar por q no tiene ni el nombre, ni la ruta
// echo "<a href=" .route('saludo'). ">Saludo</a><br>";
// echo "<hi>Esta es la vista home</h1>";?>

<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Estas en home estos nav son los del ejemplo del video</h1>
    <header>
        <nav>
            <a href= <?php echo route('home')?>>Home</a>
            <a href= <?php echo route('contacto')?> >Contacto</a>
            <a href=<?php echo route('saludo','Daniel')?> >Saludo</a>
        </nav>
    </header>
</body>
</html> -->
@extends('layout')
@section('contenido')
<h1>Home</h1>

@stop
