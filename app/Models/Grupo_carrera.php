<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo_carrera extends Model
{
    use HasFactory;
    protected $table = 'grupo_carrera';
    protected $primaryKey = 'id_grupo_carrera';
    protected $fillable = [
        'id_grupo',
        'id_carrera',
        'activo'
    ];
 
    public function AgGrupo(){ return $this->belongsTo(Grupos::class, 'id_grupo');}
    public function AgCarrera(){ return $this->belongsTo(Carreras::class, 'id_carrera');}

}
