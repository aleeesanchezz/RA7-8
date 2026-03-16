@extends('layout')

@section('content')
    <h2>Listado de equipos</h2>

    <a href="{{ route('equipos.create') }}">Crear equipo</a>

    <ul>
        @foreach($equipos as $equipo)
            <li>
                {{ $equipo->nombre }} - {{ $equipo->ciudad }}
                <a href="{{ route('equipos.show', $equipo->id_equipo) }}">Ver</a>
                <a href="{{ route('equipos.edit', $equipo->id_equipo) }}">Editar</a>
                <form action="{{ route('equipos.destroy', $equipo->id_equipo) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
