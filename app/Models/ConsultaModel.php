<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaModel extends Model
{
    use HasFactory;
    protected $fillable =[
    'f_consulta',
    'f_alta',
    'duración_proceso',
    'diagnóstico',
    'tratamiento',
    'otros_datos',
    'observaciones',
    'id_user',
    'id_paciente',
        ];
            

}
