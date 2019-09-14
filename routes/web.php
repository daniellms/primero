<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/' ,['as'=>'home','uses'=>'Controlador@home' ]);
    



Route::get('contactame',['as'=>'contacto','uses'=>'Controlador@contactos' ]);
Route::get('saludo/{nombre?}',['as'=>'saludo','uses'=>'Controlador@saludovista']); // donde solo se admitan letras mayus y minus
Route::post('contacto' ,'Controlador@mensajes') ;

