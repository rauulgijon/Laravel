<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partido;
use App\Models\Club;
use App\Models\Liga;

class PartidoSeeder extends Seeder
{
    public function run(): void
    {
        // Buscamos los IDs necesarios
        $liga = Liga::where('nombre', 'La Liga 2024')->first();
        $madrid = Club::where('nombre', 'Real Madrid')->first();
        $barca = Club::where('nombre', 'FC Barcelona')->first();
        $valencia = Club::where('nombre', 'Valencia CF')->first();

        // Creamos los partidos
        Partido::create([
            'liga_id' => $liga->id,
            'club_local_id' => $madrid->id,
            'club_visitante_id' => $barca->id,
            'fecha' => '2024-04-21',
            'resultado' => '3-2'
        ]);

        Partido::create([
            'liga_id' => $liga->id,
            'club_local_id' => $barca->id,
            'club_visitante_id' => $valencia->id,
            'fecha' => '2024-05-01',
            'resultado' => null
        ]);
    }
}