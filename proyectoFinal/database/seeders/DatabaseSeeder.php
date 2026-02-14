<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Puedes descomentarlo si lo necesitas
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Llamamos a los seeders en orden (Importante: Clubs y Ligas primero)
        $this->call([
            ClubSeeder::class,
            LigaSeeder::class,
            JugadorSeeder::class,
        ]);
    }
}