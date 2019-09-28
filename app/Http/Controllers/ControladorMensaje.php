<?php



namespace App\Http\Controllers;

use App\Http\Requests\StoreMensajesRequest;
use App\Mensaje;
use Carbon\Carbon;
//use Carbon/Carbon;  al importar va al reves la barra


use Illuminate\Http\Request;
use DB; //importar esta clase tiene q ser aca debaje de namespace

class ControladorMensaje extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::all();
       return view('mensajes.index', compact('mensajes'));
        //return "en la funcion index del ControladorMensajes";
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
    public function store(StoreMensajesRequest $request) // con este metodo cargamos la tabla de la db StoreMensajesRequest asi llamo al reques q valida el form
    {
        //aca ya tenemos acceso a los datos del fomulario
       // return  $request->all(); para verificar q te traiga tods los datos
       //return $request->input('nombre'); // devuelve un campo solo especifico
       //use DB; //importar esta clase

       DB::table('mensajes')->insert([     //con esto empezamos a cargar la tabla
            "nombre" => $request -> input('nombre'),      // en la columna nombre guarda el dato del campo nombre del formulario
            "email" => $request -> input('email'),
            "mensaje" => $request -> input('mensaje'),
            "created_at" => Carbon::now(), // carbon usa fecha, now hora actual
            "updated_at" => Carbon::now(),
       ]);
       return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = DB::table('mensajes')->where('id',$id)->first();
        //return $mensaje->nombre;
        return view('mensajes.show',compact('mensaje')); //carpeta(mensajes).vista(show)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$mensaje = Mensaje::findOrFail($id);
        $mensaje = DB::table('mensajes')->where('id',$id)->first();
        return view('mensajes.edit', compact('mensaje'));
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
        //Actualizar
        DB::table('mensajes')->where('id',$id)->update([
            "nombre" => $request -> input('nombre'),      // en la columna nombre guarda el dato del campo nombre del formulario
            "email" => $request -> input('email'),
            "mensaje" => $request -> input('mensaje'),
            "updated_at" => Carbon::now(),// carbon usa fecha, now hora actual
        ]);
        //redericcionar
        return redirect()->route('mensajes.index');
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
       DB::table('mensajes')->where('id',$id)->delete();
       return redirect()->route('mensajes.index');
    }

    public function mensajes(Request $request){
        //return $request->all();
        $valor = $request->input('nombre');
        if(isset($valor)){ // si la peticion tiene nombre no me esta andando esto
            return "Si tiene nombre es " . $request->input('nombre') ;//$request->all();
       }else{
        return "no tiene nombre"; //$this->request->all();//
      }

    $this->validate($request,[
        'nombre'=>'required',
        'email'=>'required|email',  // el primero obliga a completar el campo,2do que sea tipo email
        'mensaje'=>'required|min:5'
    ]);
    return $request->all();
        
    }

}
