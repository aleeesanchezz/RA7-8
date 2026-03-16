<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portero extends Model
{
    use HasFactory;

    protected $table = 'portero';
    protected $primaryKey = 'id_jugador';
    public $incrementing = false;
    protected $fillable = ['id_jugador', 'goles_encajados', 'paradas'];

    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'id_jugador', 'id_jugador');
    }
}
