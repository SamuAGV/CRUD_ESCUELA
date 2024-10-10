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
        Schema::create('grupo_carrera', function (Blueprint $table) {
            $table->bigIncrements('id_grupo_carrera');            
            $table->foreignId('id_grupo');          
            $table->foreignId('id_carrera');
            $table->boolean('activo');
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
