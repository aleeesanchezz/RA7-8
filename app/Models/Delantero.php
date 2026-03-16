<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delantero extends Model
{
    use HasFactory;

    protected $table = 'delantero';
    protected $primaryKey = 'id_jugador';
    public $incrementing = false;
    protected $fillable = ['id_jugador', 'goles_marcados', 'asistencias'];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'id_jugador', 'id_jugador');
    }
}
