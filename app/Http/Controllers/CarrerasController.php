<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;

use App\Models\Carreras;

class CarrerasController extends Controller
{
     //----------------------- Carrera: Lista-------------------------
     public function carreras(){

        return view('carreras')
        ->with(['carreras' => Carreras:: all()]);

    }
    
    //----------------------- Grupo: Alta-------------------------
    public function carrera_alta(){
        return view("carrera_alta");
    }

    public function carrera_registrar(Request $request){

        $this->validate($request,[
            'clave' => 'required',
            'nombre' => 'required',
            'detalle' => 'required',
            'activo' => "1"

        ]);
        //---------------------------------------------------------

        Carreras::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'detalle' => $request->input('detalle'),
            'activo' => "1"
        ));
        return redirect()->route('carreras');
    }

    //----------------------- Carrera: detalle -------------------------
    public function carrera_detalle($id){
        $query = Carreras::find($id);
        return view('carrera_detalle')
        ->with(['carrera' => $query]);
    }
    //----------------------- Carrera: editar -------------------------
    public function carrera_editar($id){
        $query = Carreras::find($id);
        return view('carrera_editar')
        ->with(['carrera' => $query]);
    }

    public function carrera_salvar(Carreras $id, Request $request){

        //dd($request->all());
        $query = Carreras::find($id->id_carrera);
            $query -> clave = $request -> clave;
            $query -> nombre = $request -> nombre;
            $query -> detalle = $request -> detalle;
        $query -> save();

        return redirect()->route("carrera_editar", ['id' => $id->id_carrera]);
        
        }
        //----------------------- Grupo: borrar -------------------------
        public function carrera_borrar(Carreras $id){
            $id->delete();
            return redirect()->route('carrera'); 
    }

}
