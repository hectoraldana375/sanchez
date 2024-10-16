<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Taller Mecanico</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .title, .subtitle {
            text-align: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }
        .subtitle {
            font-size: 1.75rem;
            font-weight: 400;
            color: #555;
        }
        .grid {
            display: grid;
            gap: 20px;
        }
        .card {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .card-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            margin: 20px;
        }
        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body {
            padding: 15px;
            flex: 1;
        }
        .card-title, .card-description {
            font-size: 1rem;
            color: #000;
            margin: 0;
        }
        .card-title {
            font-weight: 700;
            margin-bottom: 10px;
        }
        .card-description {
            font-weight: 400;
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:active {
            background-color: #004085;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .btn-danger {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
            background-color: #dc3545;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-danger:hover {
            background-color: #c82333;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-danger:active {
            background-color: #bd2130;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administrador Taller Mecanico') }}
            </h2>
        </x-slot>

        <div class="py-4">
            <!-- Agregar el botón para redirigir al formulario -->
            <div style="text-align: center;">
                <a href="{{ route('automovil.create') }}" class="btn-primary">
                    Agregar Nuevo Producto
                </a>
            </div>
        </div>

        <div class="container">
            <h2 class="subtitle">Reparaciones Clutch</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"> <!-- Aquí se aplica el nuevo estilo -->
                @forelse ($registro as $dato)
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset($dato->imagen) }}" alt="{{ $dato->titulo }}">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $dato->titulo }}</h3>
                            <p class="card-description">{{ $dato->descripcion }}</p>
                            <p class="card-description">Precio: ${{ $dato->precio }}</p>
                            <a href="{{ route('automovil.edit', $dato->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('automovil.delete', $dato->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>No hay registros.</p>
                @endforelse
            </div>
        </div>
    </x-app-layout>
</body>
</html>
