<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 

use Illuminate\Support\Facades\Session;

use App\Models\Alumnos;

class AlumnosController extends Controller
{
    //----------------------- Alumno: Lista-------------------------
    public function alumnos(){

        return view('alumnos')
        ->with(['alumnos' => Alumnos:: all()]);

    }
    
    //----------------------- Alumno: Alta-------------------------
    public function alumno_alta(){
        return view("alumno_alta");
    }

    public function alumno_registrar(Request $request){

        $this->validate($request,[
            'nombre' => 'required',
            'fn' => 'required'
        ]);

        if($request->file('foto') != ''){
            //obtener el campo file definido en el formulario
            $file = $request->file('foto');
            //obtenemos el nombre del Archivo(file)
            $img = $file->getClientOriginalName();
            //obtener fecha y hora
            $ldate = date('Ymd_His_');   //obtener fecha y hora
            $img2 = $ldate . $img;       //Concatena la fecha y hora con el nombre del archivo (file)
            //indicamos el nombre y la ruta donde se almacena el archivo(file)
            \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
            $img2= "logo_utvt.png";
        }
        //---------------------------------------------------------

        Alumnos::create(array(
            'nombre' => $request->input('nombre'),
            'fn' => $request->input('fn'),
            'foto' => $img2
        ));
        return redirect()->route('alumnos');
    }

    //----------------------- Alumno: detalle -------------------------
    public function alumno_detalle($id){
        $query = Alumnos::find($id);
        return view('alumno_detalle')
        ->with(['alumno' => $query]);
    }

    //----------------------- Alumno: editar -------------------------
    public function alumno_editar($id){
        $query = Alumnos::find($id);
        return view('alumno_editar')
        ->with(['alumno' => $query]);
    }

    public function alumno_salvar(Alumnos $id, Request $request){
        //dd($request->all());
        if($request->file('foto1') != ''){
            //----------------------------------------------------
                   //obtener el campo file definido en el formulario
                   $file = $request->file('foto1');
                   // obtenemos el nombre del archivo(file)
                      $img = $file->getClientOriginalName();
                      //$img = $request->file('img1')->getClientOriginalName();
                   //obtener fecha y hora
                     $ldate = date('Ymd_His_');   //obtener fecha y hora
                     $img2 = $ldate . $img;       //Concatena la fecha y hora con el nombre del archivo (file)
                     //indicamos el nombre y la ruta donde se almacena el archivo(file)
                     \Storage::disk('local')->put($img2, \File::get($file));
            //----------------------------------------------------
            }
        else{
               $img2= $request->foto2;
            }
             //dd($img2);
        $query = Alumnos::find($id->id_alumno);
            $query -> nombre = $request -> nombre;
            $query -> fn = $request -> fn;
            $query -> foto = $img2;
        $query -> save();

        return redirect()->route("alumno_editar", ['id' => $id->id_alumno]);
        
        }
        //----------------------- Alumno: borrar -------------------------
        public function alumno_borrar(Alumnos $id){
            $id->delete();
            return redirect()->route('alumnos'); 
    }

}