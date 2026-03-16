<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipo';
    protected $primaryKey = 'id_equipo';
    protected $fillable = ['nombre', 'ciudad'];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'id_equipo', 'id_equipo');
    }
}
