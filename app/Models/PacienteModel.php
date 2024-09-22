<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteModel extends Model
{
    use HasFactory;
    protected $fillable = [
       'apellido',
        'nombre',
        'dirección',
        'c_postal',
        'localidad',
        'provincia',
        'f_nacimiento',
        'sexo',
        'n_seguro_social',
        'n_teléfono',
    ];
}
