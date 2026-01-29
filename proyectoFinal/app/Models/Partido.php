<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'liga_id', 
        'club_local_id', 
        'club_visitante_id', 
        'fecha', 
        'resultado'
    ];
}