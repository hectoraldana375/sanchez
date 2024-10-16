<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador Reparaciones') }}
        </h2>
    </x-slot>

    <!-- Botón para redireccionar al formulario -->
    <center><a href="{{ route('reconstructora.create') }}" class="btn-add-form">Agregar Nuevo Servicio</a></center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    <section class="service-section" style="background-image: url('{{ asset($backgroundImage) }}');">
                        <h1>NUESTRAS REPARACIONES</h1>
                        <h2>¿Qué ofrecemos?</h2>

                        <div class="product-list">
                            @foreach ($services as $service)
    <div class="product-card">
        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
        <h3>{{ $service->name }}</h3>
        <a href="{{ route('reconstructora.create') }}" class="btn-enter">Entrar</a>
    </div>
@endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .service-section {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .service-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .service-section h1, .service-section h2 {
            position: relative;
            z-index: 2;
            font-weight: 700;
        }

        .service-section h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .service-section h2 {
            font-size: 1.6rem;
            margin-bottom: 40px;
        }

        .product-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            position: relative;
            z-index: 2;
        }

        .product-card {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 12px;
            width: 220px;
            text-align: center;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .product-card img {
            display: block;
            margin: 0 auto;
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .product-card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #333;
            font-weight: 600;
        }

        .btn-enter {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 24px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-enter:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .btn-add-form {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #000fe4;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 10px;
            margin-left: 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-add-form:hover {
            background-color: #000bd0; /* Cambiar color de fondo al pasar el mouse */
            color: white;
        }
    </style>
</x-app-layout>
