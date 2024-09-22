<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            'apellido'=>'Pérez',
            'nombre'=>'Juanita',
            'dirección'=> 'calabaza 4404',
            'c_postal'=>'70353',
            'localidad'=>'Nuevo Casas Grandes',
            'provincia'=>'Chihuahua',
            'f_nacimiento'=>'2003-04-21',
            'sexo'=>'Mujer',
            'n_seguro_social'=>947232395,
            'n_teléfono'=>'6376589875',
        ]);

        DB::table('pacientes')->insert([
            'apellido'=>'Suárez',
            'nombre'=>'Ramiro',
            'dirección'=> 'paris 2304',
            'c_postal'=>'70373',
            'localidad'=>'León',
            'provincia'=>'Guanajuato',
            'f_nacimiento'=>'2000-01-11',
            'sexo'=>'Hombre',
            'n_seguro_social'=>947259865,
            'n_teléfono'=>'6364223558',
                    ]);

        DB::table('pacientes')->insert([
            'apellido'=>'Giménez',
            'nombre'=>'Saúl',
            'dirección'=>'teotihuacán 1906',
            'c_postal'=>'70983',
            'localidad'=>'Xalapa',
            'provincia'=>'Veracruz',
            'f_nacimiento'=>'1992-08-05',
            'sexo'=>'Hombre',
            'n_seguro_social'=>456759865,
            'n_teléfono'=>'6364229950',
                                ]);

    }
}
