@extends('layout')

@section('content')
    <h2>Detalle del equipo</h2>

    <p><strong>ID:</strong> {{ $equipo->id_equipo }}</p>
    <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
    <p><strong>Ciudad:</strong> {{ $equipo->ciudad }}</p>

    <h3>Jugadores</h3>
    <ul>
        @forelse($equipo->jugadores as $jugador)
            <li>{{ $jugador->nombre }} (Dorsal {{ $jugador->dorsal }})</li>
        @empty
            <li>No hay jugadores</li>
        @endforelse
    </ul>

    <a href="{{ route('equipos.index') }}">Volver</a>
@endsection
