@extends('layout')

@section('content')
    <h2>Editar equipo</h2>

    <form action="{{ route('equipos.update', $equipo->id_equipo) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $equipo->nombre) }}">

        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad', $equipo->ciudad) }}">

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('equipos.index') }}">Volver</a>
@endsection
