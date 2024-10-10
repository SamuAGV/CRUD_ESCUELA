<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;
    protected $table = 'carrera';
    protected $primaryKey = 'id_carrera';
    protected $fillable = [
        'clave',
        'nombre',
        'detalle',
        'activo'
    ];    
}
