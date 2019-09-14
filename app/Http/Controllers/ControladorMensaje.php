<?php



namespace App\Http\Controllers;

use DB; //importar esta clase tiene q ser aca debaje de namespace

use Illuminate\Http\Request;

class ControladorMensaje extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensajes.create');  //carpeta.archivo 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //aca ya tenemos acceso a los datos del fomulario
       // return  $request->all(); para verificar q te traiga tods los datos
       //return $request->input('nombre'); // devuelve un campo solo especifico
       //use DB; //importar esta clase
       DB::table('mensajes')->insert([     //con esto empezamos a cargar la tabla
            "nombre" => $request -> input('nombre'),      // en la columna nombre guarda el dato del campo nombre del formulario
            "email" => $request -> input('email'),
            "mensaje" => $request -> input('mensaje')
       ]);
       return 'Hecho';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
