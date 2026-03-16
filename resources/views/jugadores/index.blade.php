@extends('layout')

@section('content')
    <h2>Listado de jugadores</h2>

    <a href="{{ route('jugadores.create') }}">Crear jugador</a>

    <ul>
        @foreach($jugadores as $jugador)
            <li>
                {{ $jugador->nombre }} - Dorsal {{ $jugador->dorsal }} - Equipo {{ $jugador->equipo?->nombre }}
                <a href="{{ route('jugadores.show', $jugador->id_jugador) }}">Ver</a>
                <a href="{{ route('jugadores.edit', $jugador->id_jugador) }}">Editar</a>
                <form action="{{ route('jugadores.destroy', $jugador->id_jugador) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
