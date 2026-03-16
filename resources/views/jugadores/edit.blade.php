@extends('layout')

@section('content')
    <h2>Editar jugador</h2>

    <form action="{{ route('jugadores.update', $jugador->id_jugador) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $jugador->nombre) }}">

        <label for="dorsal">Dorsal</label>
        <input type="number" id="dorsal" name="dorsal" value="{{ old('dorsal', $jugador->dorsal) }}">

        <label for="id_equipo">Equipo</label>
        <select id="id_equipo" name="id_equipo">
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id_equipo }}" {{ $jugador->id_equipo == $equipo->id_equipo ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('jugadores.index') }}">Volver</a>
@endsection
