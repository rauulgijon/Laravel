<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'jugadores'; 

    protected $fillable = ['nombre', 'posicion', 'dorsal', 'club_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}