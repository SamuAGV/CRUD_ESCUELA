<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;

use App\Models\Alumnos;
use App\Models\Grupos;
use App\Models\Alumno_grupo;

class Alumnos_GruposController extends Controller
{
    //----------------------- Alumno a Grupo: Lista-------------------------
    public function asignacion(){

        $query = \DB::select("SELECT gca.id_alumno_grupo AS id, gca.cuatrimestre, gru.clave,
                 gru.nombre AS grupo, alu.nombre AS alumno
                 FROM alumnos AS alu, grupos AS gru, alumno_grupo AS gca
                 WHERE alu.id_alumno = gca.id_alumno AND gru.id_grupo = gca.id_grupo");


        return view('asignacion')
        ->with(['grupos' => Grupos::all()])
        ->with(['alumnos' => Alumnos::all()])
        ->with(['asignaciones' => Alumno_Grupo::all()])
        ->with(['datos' => $query]);

    }
    
    //----------------------- Alumno a Grupo: Alta-------------------------
    public function asignacion_registrar(Request $request){
        //dd($request->all());

        Alumno_Grupo::create(array(
          'id_alumno' => $request->input('id_alumno'),
          'id_grupo' => $request->input('id_grupo'),
          'cuatrimestre' => $request->input('cuatrimestre')  ,
          'activo' => "1"
        ));

        return redirect()->route('asignacion');
    }

    //----------------------- Alumno a Grupo: Borrar-------------------------
    public function asignacion_borrar(Alumno_Grupo $id){
        $id->delete();
        return redirect()->route('asignacion');
    }

}
