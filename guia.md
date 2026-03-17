# Guía rápida RA7 y RA8

## 1) Puesta en marcha en otro portátil (después de git pull)

Requisitos mínimos: PHP, Composer y extensión SQLite activada en PHP.

1. Abrir terminal en la carpeta del proyecto.
  - Si no tienes la carpeta en ese portátil:

```bash
git clone https://github.com/aleeesanchezz/RA7-8.git
cd RA7&8
```

  - Si ya existe la carpeta local:

```bash
git pull
```

2. Instalar dependencias:

```bash
composer install
```

3. Preparar entorno:

```bash
cp .env.example .env
php artisan key:generate
```

En Windows PowerShell, si `cp` da error:

```powershell
Copy-Item .env.example .env
```

4. Crear archivo SQLite (si no existe):

```powershell
New-Item -Path .\database\database.sqlite -ItemType File -Force
```

5. Cargar base de datos:

```bash
php artisan migrate:fresh --seed
```

6. Arrancar servidor:

```bash
php artisan serve
```

7. Abrir web en:
- http://127.0.0.1:8000/equipos
- http://127.0.0.1:8000/jugadores

8. Probar API con Postman:
- GET http://127.0.0.1:8000/api/equipos
- GET http://127.0.0.1:8000/api/jugadores

## 2) Orden para adaptarlo si cambian requisitos

1. Cambiar migraciones en `database/migrations`.
2. Ejecutar:

```bash
php artisan migrate:fresh --seed
```

3. Cambiar campos en modelos (`$fillable`, tabla, clave primaria).
4. Cambiar validación en controladores web y API.
5. Cambiar formularios Blade.
6. Probar rutas con:

```bash
php artisan route:list
```

## 3) Dónde tocar cada cosa

- Base de datos: `database/migrations`
- Datos de prueba: `database/seeders`
- Relación entre tablas: `app/Models`
- CRUD web (lógica): `app/Http/Controllers/EquipoController.php` y `app/Http/Controllers/JugadorController.php`
- CRUD API JSON: `app/Http/Controllers/Api`
- Rutas web: `routes/web.php`
- Rutas API: `routes/api.php`
- Vistas: `resources/views/equipos` y `resources/views/jugadores`

## 4) Endpoints API mínimos

### Equipos
- GET /api/equipos
- GET /api/equipos/{id}
- POST /api/equipos
- PUT /api/equipos/{id}
- DELETE /api/equipos/{id}

### Jugadores
- GET /api/jugadores
- GET /api/jugadores/{id}
- POST /api/jugadores
- PUT /api/jugadores/{id}
- DELETE /api/jugadores/{id}

## 5) JSON ejemplo para Postman

### Crear equipo

```json
{
  "nombre": "Racing Sur",
  "ciudad": "Sevilla"
}
```

### Crear jugador

```json
{
  "nombre": "Pablo Ruiz",
  "dorsal": 10,
  "id_equipo": 1
}
```

## 6) Checklist antes de entregar

- Migraciones funcionan sin errores.
- Seeders insertan datos.
- CRUD web funciona en equipos.
- CRUD web funciona en jugadores.
- API devuelve JSON en todos los endpoints.
- Relaciones equipo-jugador cargan bien en detalle.
- No hay código innecesario.

Alejandro Sanchez
