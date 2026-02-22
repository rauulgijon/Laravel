<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            
            // Relación con Liga
            $table->foreignId('liga_id')->constrained('ligas')->onDelete('cascade');

            // Relación Club Local 
            $table->unsignedBigInteger('club_local_id');
            $table->foreign('club_local_id')->references('id')->on('clubs');

            // Relación Club Visitante 
            $table->unsignedBigInteger('club_visitante_id');
            $table->foreign('club_visitante_id')->references('id')->on('clubs');

            $table->date('fecha');
            $table->string('resultado')->nullable(); 
            
            // Sin timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
