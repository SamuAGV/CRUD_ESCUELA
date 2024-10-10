<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;

use App\Models\Carreras;
use App\Models\Grupos;
use App\Models\Grupo_carrera;

class Grupos_CarrerasController extends Controller
{
    //----------------------- Grupo a Carrera: Lista-------------------------
    public function grupo_carrera(){

        $query = \DB::select("SELECT gcc.id_grupo_carrera AS id, gru.clave,
                 gru.nombre AS grupo, car.clave, car.nombre AS carrera
                 FROM carrera AS car, grupos AS gru, grupo_carrera AS gcc
                 WHERE car.id_carrera = gcc.id_carrera AND gru.id_grupo = gcc.id_grupo");


        return view('grupo_carrera')
        ->with(['grupos' => Grupos::all()])
        ->with(['carreras' => Carreras::all()])
        ->with(['grupo_carreras' => Grupo_carrera::all()])
        ->with(['datos' => $query]);

    }
    
    //----------------------- Alumno a Grupo: Alta-------------------------
    public function grc_registrar(Request $request){
        //dd($request->all());

        Grupo_carrera::create(array(
          'id_grupo' => $request->input('id_grupo'),
          'id_carrera' => $request->input('id_carrera'),
          'activo' => "1"
        ));

        return redirect()->route('grupo_carrera');
    }

    //----------------------- Alumno a Grupo: Borrar-------------------------
    public function grc_borrar(Grupo_carrera $id){
        $id->delete();
        return redirect()->route('grupo_carrera');
    }

}
