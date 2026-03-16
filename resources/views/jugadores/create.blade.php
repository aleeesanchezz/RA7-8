@extends('layout')

@section('content')
    <h2>Crear jugador</h2>

    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

        <label for="dorsal">Dorsal</label>
        <input type="number" id="dorsal" name="dorsal" value="{{ old('dorsal') }}">

        <label for="id_equipo">Equipo</label>
        <select id="id_equipo" name="id_equipo">
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id_equipo }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('jugadores.index') }}">Volver</a>
@endsection
