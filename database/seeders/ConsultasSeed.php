<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consultas')->insert([
            'f_consulta'=>'2024-08-08',
            'f_alta'=>'2024-08-10',
            'duración_proceso'=>'3',
            'diagnóstico'=>'endometriosis severa',
            'tratamiento'=>'Analgésicos no esteroideos,
             Consideración de laparoscopia para la extirpación de lesiones',
             'otros_datos'=>'Reevaluación en tres
             meses para valorar la eficacia del tratamiento y ajustar según sea necesario',
             'observaciones'=>'Se sugiere hacer cambios en la dieta y realizar 
             ejercicio regularmente, hacer un monitoreo del ciclo menstrual.',
             'id_user'=>'1',
            'id_paciente'=>'1',
                    ]);
            
                    DB::table('consultas')->insert([
                        'f_consulta'=>'2024-08-14',
                        'f_alta'=>'2024-08-14',
                        'duración_proceso'=>'1',
                        'diagnóstico'=>'hipertensión arterial esencial',
                        'tratamiento'=>'una dieta baja en sodio y rica en frutas y verduras,
            Aumento de la actividad física, Pérdida de peso si es necesario.',
                         'otros_datos'=>'Reevaluar en 4-6 semanas para medir la presión arterial y 
                         ajustar el tratamiento según sea necesario.',
                         'observaciones'=>'Tensión arterial: Lecturas de 150/95 mmHg en múltiples ocasiones durante la 
                         consulta',
                         'id_user'=>'2',
                         'id_paciente'=>'2',
                                ]);
            
                     DB::table('consultas')->insert([
                        'f_consulta'=>'2024-08-22',
                        'f_alta'=>'2024-08-24',
                        'duración_proceso'=>'3',
                        'diagnóstico'=>'apendicitis aguda, una inflamación del apéndice',
                        'tratamiento'=>'La paciente será internada y Se programará una apendicectomía laparoscópica',
                        'otros_datos'=>'Hidratación intravenosa
                        Antibióticos intravenosos para tratar la infección',
                       'observaciones'=>'La paciente permanecerá en el hospital durante aproximadamente tres días 
                        con instrucciones sobre cuidados en casa',
                        'id_user'=>'3',
                         'id_paciente'=>'3',
                                            ]);
    }
}
