<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión DAW Laravel</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 24px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 16px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 12px;
        }

        nav {
            margin-bottom: 14px;
        }

        nav a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            color: #0f766e;
            font-weight: 600;
        }

        a {
            color: #0f766e;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 10px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        ul li a,
        ul li form {
            margin-left: 8px;
        }

        ul li form {
            display: inline;
        }

        label {
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input,
        select {
            width: 100%;
            max-width: 420px;
            padding: 8px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            margin-top: 14px;
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            background-color: #0f766e;
            color: white;
            cursor: pointer;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 14px 0 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión Entorno Servidor</h1>

        <nav>
            <a href="{{ route('equipos.index') }}">Equipos</a>
            <a href="{{ route('jugadores.index') }}">Jugadores</a>
        </nav>

        <hr>

        @yield('content')
    </div>
</body>
</html>
