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


Route::get('/', [
    'uses'=>'Controlador@home',
    'as'=>'home',
]);

Route::get('contactame', [
    'uses' => 'Controlador@contactos',
    'as' => 'contacto',
]);
Route::get('saludo/{nombre?}', [
    'uses' => 'Controlador@saludovista',
    'as' => 'saludo',
])->where('nombre',"[A-Za-z]+"); // donde solo se admitan letras mayus y minus

Route::post('contacto' ,'Controlador@mensajes') ;

Route::get('mensajes/crear',[
    'uses' => 'ControladorMensaje@create',
    'as' => 'mensajes.crear'
]);
Route::post('mensajes',[
    'uses' => 'ControladorMensaje@store',
    'as' => 'mensajes.store'
]);


