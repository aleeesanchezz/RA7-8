@extends('layout')

@section('content')
    <h2>Detalle del jugador</h2>

    <p><strong>ID:</strong> {{ $jugador->id_jugador }}</p>
    <p><strong>Nombre:</strong> {{ $jugador->nombre }}</p>
    <p><strong>Dorsal:</strong> {{ $jugador->dorsal }}</p>
    <p><strong>Equipo:</strong> {{ $jugador->equipo?->nombre }}</p>

    <h3>Datos extra</h3>

    @if($jugador->portero)
        <p>Portero</p>
        <p>Goles encajados: {{ $jugador->portero->goles_encajados }}</p>
        <p>Paradas: {{ $jugador->portero->paradas }}</p>
    @endif

    @if($jugador->delantero)
        <p>Delantero</p>
        <p>Goles marcados: {{ $jugador->delantero->goles_marcados }}</p>
        <p>Asistencias: {{ $jugador->delantero->asistencias }}</p>
    @endif

    <a href="{{ route('jugadores.index') }}">Volver</a>
@endsection
