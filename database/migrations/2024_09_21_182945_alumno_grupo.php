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
        Schema::create('alumno_grupo', function (Blueprint $table) {
            $table->bigIncrements('id_alumno_grupo');            
            $table->foreignId('id_grupo');          
            $table->foreignId('id_alumno');
            $table->boolean('activo');
            $table->string('cuatrimestre');
            $table->rememberToken();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
