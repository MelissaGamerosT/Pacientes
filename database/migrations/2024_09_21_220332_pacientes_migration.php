<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes',function(Blueprint $table){
        $table->increments('id');
        $table->string('apellido');
        $table->string('nombre');
        $table->string('dirección');
        $table->string('c_postal');
        $table->string('localidad');
        $table->string('provincia');
        $table->date('f_nacimiento');
        $table->string('sexo',10);
        $table->integer('n_seguro_social')->unique();
        $table->string('n_teléfono',10);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
