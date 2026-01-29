<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jugador;
use App\Models\Club;

class JugadorSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buscamos los Clubes para obtener sus IDs reales
        $madrid = Club::where('nombre', 'Real Madrid')->first();
        $barca = Club::where('nombre', 'FC Barcelona')->first();
        $valencia = Club::where('nombre', 'Valencia CF')->first();

        // 2. Creamos los jugadores usando la relación
        Jugador::create([
            'nombre' => 'Vinicius Jr',
            'posicion' => 'Delantero',
            'dorsal' => 7,
            'club_id' => $madrid->id
        ]);

        Jugador::create([
            'nombre' => 'Modric',
            'posicion' => 'Medio',
            'dorsal' => 10,
            'club_id' => $madrid->id
        ]);

        Jugador::create([
            'nombre' => 'Pedri',
            'posicion' => 'Medio',
            'dorsal' => 8,
            'club_id' => $barca->id
        ]);

        Jugador::create([
            'nombre' => 'Gayà',
            'posicion' => 'Defensa',
            'dorsal' => 14,
            'club_id' => $valencia->id
        ]);
    }
}