<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = array('nombre', 'estadio', 'fundacion', 'presidente', 'escudo');

    public function jugadores() 
    {
        return $this->hasMany('App\Models\Jugador');
    }
}
