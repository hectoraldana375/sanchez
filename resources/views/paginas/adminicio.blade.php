
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador Inicio</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }


        /* Sección principal (hero) con carrusel de fondo */
        .hero-section {
            position: relative;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: rgb(255, 255, 255);
            text-align: center;
            overflow: hidden;
        }

        .carousel-section {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 90%;
            z-index: 0;
        }

        .carousel-inner img {
            object-fit: cover;
            width: 100%;
            height: 90%;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            margin: 0;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }

        .hero-section p {
            font-size: 1.4rem;
            margin: 20px 0;
            z-index: 2;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
        }

        /* Botones personalizados */
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
        }

        .btn-custom {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
            border: none;
        }

        .btn-info:hover {
            background-color: #138496;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        /* Sección de Historia y "Contamos con" */
        .section-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .history-section {
            width: 48%;
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .history-section h2 {
            font-size: 2.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            border-left: 5px solid #007bff;
            padding-left: 15px;
        }

        .history-section p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 0;
        }

        .features-section {
            width: 48%;
        }

        .features-section h2 {
            font-size: 2.2rem;
            font-weight: bold;
            color: #000000;
            margin-bottom: 25px;
            border-left: 5px solid #28a745;
            padding-left: 15px;
        }

        .feature {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .feature img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 20px;
            border: 3px solid #007bff;
        }

        .feature h3 {
            font-size: 1.4rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .feature p {
            font-size: 1rem;
            color: #555;
            margin: 0;
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

        @media (max-width: 768px) {
            .section-wrapper {
                flex-direction: column;
                padding: 20px;
            }

            .history-section,
            .features-section {
                width: 100%;
                padding: 0;
            }

            .features-section {
                gap: 15px;
            }

            .features-section h2 {
                margin-top: 40px;
            }

            .carousel-item {
    position: relative;
}

        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administrador Inicio') }}
            </h2>
        </x-slot>



    <!-- Botones con diseño -->
    <div class="buttons-container">
        <a href="{{ route('carousel.create') }}" class="btn btn-primary btn-custom">Agregar Carrusel</a>
        <a href="{{ route('history.create') }}" class="btn btn-success btn-custom">Agregar Historia</a>
        <a href="{{ route('feature.create') }}" class="btn btn-info btn-custom">Agregar Característica</a>
    </div>

    <!-- Sección principal (hero) con carrusel de fondo -->
    <div class="hero-section">
        <div class="carousel-section">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">

                    @foreach($heroImages as $index => $imagePath)

                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset($imagePath) }}" class="d-block w-100" alt="Imagen Carrusel">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="hero-content">
            <h1>Reconstructora de Clutch y Balatas Valles</h1>
            <p>Servicios Mecánicos, Reparación de Piezas y Venta</p>
        </div>
    </div>

    <!-- Sección de Historia y "Contamos con" -->
<div class="section-wrapper">
    <div class="history-section">
        <h2>Nuestra Historia</h2>
        <p>{{ $historyText }}</p>
        <!-- Botones de Editar y Eliminar -->
        <div class="button-group">
            <form action="{{ route('history.destroy') }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

    <div class="features-section">
        <h2>Contamos con</h2>
        @foreach($features as $feature)
        <div class="feature">
            <img src="{{ asset($feature->imagen) }}" alt="{{ $feature->titulo }}">
            <div>
                <h3>{{ $feature->titulo }}</h3>
                <p>{{ $feature->description }}</p> <!-- Verifica que esto esté presente -->
                <!-- Botones de Editar y Eliminar para cada característica -->
                <div class="button-group">
                    <form action="{{ route('features.destroy', $feature->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    <!-- Incluye Bootstrap JS y Popper.js -->

</x-app-layout>

</body>
</html>
