@extends('layout')

@section('content')
    <h2>Crear equipo</h2>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad') }}">

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('equipos.index') }}">Volver</a>
@endsection
