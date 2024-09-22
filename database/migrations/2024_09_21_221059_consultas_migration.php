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
        Schema::create('consultas', function(Blueprint $table){
            $table->increments('id');
            $table->date('f_consulta');
            $table->date('f_alta');
            $table->string('duración_proceso');
            $table->string('diagnóstico');
            $table->string('tratamiento');
            $table->string('otros_datos');
            $table->string('observaciones');

             //foranea 1
             $table->integer('id_user')->unsigned();
             $table->foreign('id_user')->references('id')->on('users');
 
             //foranea 2
             $table->integer('id_paciente')->unsigned();
             $table->foreign('id_paciente')->references('id')->on('pacientes');
 
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
