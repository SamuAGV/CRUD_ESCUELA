<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $primaryKey = 'id_grupo';
    protected $fillable = [
        'clave',
        'nombre',
        'cuatrimestre'
    ];

}
