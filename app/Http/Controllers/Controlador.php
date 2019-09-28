<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\http\Requests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controlador extends Controller
{
  //  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  // COMENTAR UN BLOQUE SELECCIONADO ctl k + ctrl c  
  // DESCOMENTAR UN BLOQUE  ctrl k + ctlr u
  



  public function home(){
      return view('home');
  }

  public function saludo($nombre="invitado"){
    return "Saludos para $nombre";
    }

  public function contactos(){
      return view('contactos');
  } 

    public function saludovista($nombre="invitado"){
        //return view('saludo',['nombre'=>$nombre]);
        
        $ver="<h1>Contenido html</h1>";
        $jscript="<script>alert('Algun mensaje de jscript-CrossSite Scripting!')</script>";
        $consolas = [
            "PlayStation 4",
            "XBox",
            "Wii"
            ]; // array
        return view('saludo',compact('nombre','ver','jscript','consolas'));
    }               

   
  
}