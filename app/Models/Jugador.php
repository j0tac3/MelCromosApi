<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $fillable = array('numero', 'seccion', 'nombre', 'apellidos', 'apodo', 'fecha_nacimiento', 'altura', 'nacionalidad', 'edicion', 'equipo_id');

    public function equipo()
     {
        return $this->belongsTo('App\Models\Equipo');
    }
}
