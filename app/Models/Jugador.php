<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugador';
    protected $primaryKey = 'id_jugador';
    protected $fillable = ['nombre', 'dorsal', 'id_equipo'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo', 'id_equipo');
    }

    public function portero()
    {
        return $this->hasOne(Portero::class, 'id_jugador', 'id_jugador');
    }

    public function delantero()
    {
        return $this->hasOne(Delantero::class, 'id_jugador', 'id_jugador');
    }
}
