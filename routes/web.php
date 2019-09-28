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

Route::post('contacto' ,'ControladorMensaje@mensajes') ;

Route::get('mensajes/crear',[
    'uses' => 'ControladorMensaje@create',
    'as' => 'mensajes.crear'
]);
Route::post('mensajes',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@store',
    'as' => 'mensajes.store'
]);

Route::get('mensajes/index',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@index',
    'as' => 'mensajes.index'
]);
Route::get('mensajes/{id}',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@show',
    'as' => 'mensajes.show'
]);

Route::get('mensajes/{id}/edit/',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@edit',
    'as' => 'mensajes.edit'
]);
Route::put('mensajes/{id}',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@update',
    'as' => 'mensajes.update'
]);
Route::delete('mensajes/{id}',[     // toma los datos del formulario
    'uses' => 'ControladorMensaje@destroy',
    'as' => 'mensajes.destroy'
]);
Route::get('login',[
    'uses' => 'Auth\LoginController@showLoginForm',
    // 'as' => 'login'
]);
Route::post('login',[
    'uses' => 'Auth\LoginController@Login'

]);


Route::resource('usuarios','ControladorUsuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('roles',function(){
    //return \App\Role::all(); //devuelve los roles
    return \App\Role::with('user')->get(); // me usuario relacionado
});

Route::get('usuarios/{id}/edit',[
    'uses' => 'ControladorUsuario@edit',
    'as' => 'user.edit'
]);
Route::delete('usuarios/{id}',[     // toma los datos del formulario
    'uses' => 'ControladorUsuario@destroy',
    'as' => 'user.destroy'
]);
