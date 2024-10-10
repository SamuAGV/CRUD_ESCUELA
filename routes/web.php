<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnosController;

use App\Http\Controllers\GruposController;

use App\Http\Controllers\Alumnos_GruposController;

use App\Http\Controllers\CarrerasController;


Route::get('/', function () {   return view('welcome');});

//--------------------------- Rutas: Alumnos-----------------------------------
Route::name('alumnos')->get('/alumnos',[AlumnosController::class, 'alumnos']);
Route::name('alumno_alta')->get('/alumno_alta',[AlumnosController::class, 'alumno_alta']);
Route::name('alumno_registrar')->post('/alumno_registrar',[AlumnosController::class, 'alumno_registrar']);

Route::name('alumno_detalle')->get('/alumno_detalle/{id}',[AlumnosController::class, 'alumno_detalle']);
Route::name('alumno_editar')->get('/alumno_editar/{id}',[AlumnosController::class, 'alumno_editar']);
Route::name('alumno_salvar')->put('/alumno_savar/{id}',[AlumnosController::class, 'alumno_salvar']);
Route::name('alumno_borrar')->get('/alumno_borrar/{id}',[AlumnosController::class, 'alumno_borrar']);

//--------------------------- Rutas: Grupos-----------------------------------
Route::name('grupos')->get('/grupos',[GruposController::class, 'grupos']);
Route::name('grupo_alta')->get('/grupo_alta',[GruposController::class, 'grupo_alta']);
Route::name('grupo_registrar')->post('/grupo_registrar',[GruposController::class, 'grupo_registrar']);

Route::name('grupo_detalle')->get('/grupo_detalle/{id}',[GruposController::class, 'grupo_detalle']);
Route::name('grupo_editar')->get('/grupo_editar/{id}',[GruposController::class, 'grupo_editar']);
Route::name('grupo_salvar')->put('/grupo_savar/{id}',[GruposController::class, 'grupo_salvar']);
Route::name('grupo_borrar')->get('/grupo_borrar/{id}',[GruposController::class, 'grupo_borrar']);

//--------------------------- Rutas: Alumno a Grupo-----------------------------------
Route::name('asignacion')->get('/asignacion',[Alumnos_GruposController::class, 'asignacion']);
Route::name('asignacion_registrar')->post('/asignacion_registrar',[Alumnos_GruposController::class, 'asignacion_registrar']);
Route::name('asignacion_borrar')->get('/asignacion_borrar{id}',[Alumnos_GruposController::class, 'asignacion_borrar']);

//--------------------------- Rutas: Carreras-----------------------------------
Route::name('carreras')->get('/carreras',[CarrerasController::class, 'carreras']);
Route::name('carrera_alta')->get('/carrera_alta',[CarrerasController::class, 'carrera_alta']);
Route::name('carrera_registrar')->post('/carrera_registrar',[CarrerasController::class, 'carrera_registrar']);

Route::name('carrera_detalle')->get('/carrera_detalle/{id}',[CarrerasController::class, 'carrera_detalle']);
Route::name('carrera_editar')->get('/carrera_editar/{id}',[CarrerasController::class, 'carrera_editar']);
Route::name('carrera_salvar')->put('/carrera_savar/{id}',[CarrerasController::class, 'carrera_salvar']);
Route::name('carrera_borrar')->get('/carrera_borrar/{id}',[CarrerasController::class, 'carrera_borrar']);