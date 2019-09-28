<?php

namespace App\Http\Controllers;

use DB;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\ActualizarUsuarioRequest;


class ControladorUsuario extends Controller
{

    function __construct()
    {
        $this->middleware('auth');  //para ejecutar este controlador un usuario debe estar registrado
        $this->middleware('roles:admin',['except' => ['edit']]);// $this->middleware('roles'); // validar en rol admin del usuario
                            // : para pasar parametro ; no se aplicara el middlware para edit
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all(); // con elocuent trae todos los usuarios de la db
        return view('usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('usuarios.show',compact('user')); // nombre de la carpeta luego la vista
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     //   $user = DB::table('users')->where('id',$id)->first();
        $user = User::findOrFail($id);
      //  dd($user->id.' '.auth()->user()->id); // ver los datos
        $this->authorize('edit',$user);  // uso asi por q el de arriba no me anda
       // $this->authorize($user); //llamamos ala policy y le pasamos por parametro un usuario, en este caso es el id q se ingresa por la url
        return view('usuarios.edit',compact('user'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarUsuarioRequest $request, $id)
    {
       $user = User::findOrFail($id);
       $this->authorize('update',$user);
       $user->update($request->all());
       return back()->with('info','Usuario Actualizado');

       // return $request->all();  para mostrar valores
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
}
