<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public $timestamps = false; // Importante si no tienes created_at/updated_at

    protected $fillable = [
        'liga_id', 
        'club_local_id', 
        'club_visitante_id', 
        'fecha', 
        'resultado'
    ];

    // Relación con la Liga
    public function liga() {
        return $this->belongsTo(Liga::class, 'liga_id');
    }

    // Relación con el Equipo Local
    public function equipoLocal() {
        return $this->belongsTo(Club::class, 'club_local_id');
    }

    // Relación con el Equipo Visitante
    public function equipoVisitante() {
        return $this->belongsTo(Club::class, 'club_visitante_id');
    }
}