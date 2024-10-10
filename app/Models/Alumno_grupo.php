<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno_grupo extends Model
{
    use HasFactory;
    protected $table = 'alumno_grupo';
    protected $primaryKey = 'id_alumno_grupo';
    protected $fillable = [
        'id_grupo',
        'id_alumno',
        'activo',
        'cuatrimestre'
    ];

    public function AgAlumnos() { return $this->belongsTo(Alumnos::class, 'id_alumno');}
    public function AgGrupo() { return $this->belongsTo(Grupos::class, 'id_grupo');}
}
