@extends('layouts.cliente')

@section('title', 'Nuestros Servicios')

@section('content')
<div class="container mx-auto p-4">
    <!-- Título centrado -->
    <div class="flex justify-center items-center relative mb-8">
        <h1 class="text-4xl font-bold text-gray-900 text-center">Nuestros Servicios</h1>
    </div>

    <!-- Notas informativas en dos columnas -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        <!-- Columna izquierda -->
        <div class="flex flex-col space-y-4">
            <!-- Nota 1 y Nota 2 -->
            <div class="flex space-x-4">
                <!-- Nota 1 -->
                <div class="note p-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 shadow-md rounded-md flex-1">
                    <p class="text-sm font-semibold">
                        Nota 1: Realizamos reparaciones completas para todo tipo de vehículos, con repuestos originales y garantizados.
                    </p>
                </div>

                <!-- Nota 2 -->
                <div class="note p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-md rounded-md flex-1">
                    <p class="text-sm font-semibold">
                        Nota 2: Todos los trabajos cuentan con una garantía de 12 meses. ¡Confía en los expertos!
                    </p>
                </div>
            </div>
        </div>

        <!-- Columna derecha -->
        <div class="flex flex-col">
            <!-- Nota 3 y Nota 4 -->
            <div class="flex space-x-4">
                <!-- Nota 3 -->
                <div class="note p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 shadow-md rounded-md flex-1">
                    <p class="text-sm font-semibold">
                        Nota 3: Contamos con equipos especializados y herramientas de alta tecnología para diagnósticos precisos.
                    </p>
                </div>

                <!-- Nota 4 -->
                <div class="note p-4 bg-red-100 border-l-4 border-red-500 text-red-700 shadow-md rounded-md flex-1">
                    <p class="text-sm font-semibold">
                        Nota 4: Ofrecemos asistencia personalizada y precios competitivos en todas nuestras reparaciones.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tarjetas de productos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($productos as $producto)
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                <div class="w-full h-48 overflow-hidden rounded-lg mb-4">
                    <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-semibold mb-2">{{ $producto->titulo }}</h2>
                <p class="text-gray-700 mb-4 flex-grow">{{ $producto->descripcion }}</p>
                <p class="text-lg font-bold text-center mt-auto">${{ number_format($producto->precio, 2) }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    /* Estilos para las notas informativas */
    .note {
        animation: move 2s ease-in-out infinite;
    }

    @keyframes move {
        0% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0); }
    }

    /* Estilos para las tarjetas */
    .bg-white {
        background-color: white;
    }

    .rounded-lg {
        border-radius: 0.75rem;
    }

    .shadow-md {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .h-48 {
        height: 12rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .font-semibold {
        font-weight: 600;
    }

    .text-lg {
        font-size: 1.125rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .object-cover {
        object-fit: cover;
    }

    .grid {
        display: grid;
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }

    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .gap-6 {
        gap: 1.5rem;
    }

    /* Añade un ratio de aspecto para las imágenes */
    .overflow-hidden {
        position: relative;
        padding-top: 66.66%; /* Relación de aspecto 3:2 */
    }

    .overflow-hidden img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 115%;
    }
</style>
