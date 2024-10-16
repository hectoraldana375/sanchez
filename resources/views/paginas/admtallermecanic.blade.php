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
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Estilos para las tarjetas */
        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            padding: 16px;
            border-radius: 0.75rem; /* Estilo de las tarjetas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
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
            margin-bottom: 16px; /* Espaciado debajo de la imagen */
        }
        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-title {
            font-size: 1.25rem; /* Aumentar tamaño del título */
            font-weight: 700;
            margin-bottom: 8px; /* Espaciado debajo del título */
            color: #000;
        }
        .card-description {
            font-size: 1rem;
            font-weight: 400;
            color: #555;
            margin-bottom: 8px; /* Espaciado debajo de la descripción */
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
            margin-top: 8px; /* Espaciado arriba del botón */
        }
        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
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
            margin-top: 8px; /* Espaciado arriba del botón */
        }
        .btn-danger:hover {
            background-color: #c82333;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilos para las notas informativas */
        .note {
            animation: move 2s ease-in-out infinite;
            padding: 16px;
            border-radius: 0.5rem;
            color: #fff;
        }
        .bg-blue-100 { background-color: #ebf8ff; }
        .bg-green-100 { background-color: #f0fff4; }
        .bg-yellow-100 { background-color: #fefcbf; }
        .bg-red-100 { background-color: #fee2e2; }
        .border-l-4 {
            border-left-width: 4px;
        }
        .border-blue-500 { border-left-color: #3b82f6; }
        .border-green-500 { border-left-color: #22c55e; }
        .border-yellow-500 { border-left-color: #facc15; }
        .border-red-500 { border-left-color: #ef4444; }
        .text-blue-700 { color: #1e40af; }
        .text-green-700 { color: #166534; }
        .text-yellow-700 { color: #b45309; }
        .text-red-700 { color: #b91c1c; }

        @keyframes move {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0); }
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
            <div style="text-align: center;">
                <a href="{{ route('taller.create') }}" class="btn-primary">
                    Agregar Nuevo Producto
                </a>
            </div>
        </div>

        <div class="container">
            <h2 class="subtitle">Nuestros Servicios</h2>
            <div class="row">
                

                <!-- Tarjetas de productos -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($registro as $dato)
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset($dato->imagen) }}" alt="{{ $dato->titulo }}">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $dato->titulo }}</h3>
                                <p class="card-description">{{ $dato->descripcion }}</p>
                                <p class="card-description">Precio: ${{ $dato->precio }}</p>
                                <a href="{{ route('taller.edit', $dato->id) }}" class="btn-primary">Editar</a>
                                <form action="{{ route('taller.delete', $dato->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center col-span-3">
                            <p>No hay productos disponibles.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
