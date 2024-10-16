@extends('layouts.cliente')


@section('title', 'Nuestros Servicios')

@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Tipografía sans-serif para toda la página */
            color: #333;
        }

        .service-section {
            background: url('https://azmxstaging.wpengine.com/wp-content/uploads/2022/09/AdobeStock_299812441-scaled.jpeg') no-repeat center center fixed;
            background-size: cover;
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Asegurar la misma tipografía en los encabezados */
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Asegurar la misma tipografía en las tarjetas */
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .product-card img {
            display: block;
            margin: 0 auto; /* Centrar la imagen horizontalmente */
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

        .product-card p {
            font-size: 0.9rem;
            color: #555;
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Asegurar la misma tipografía en los botones */
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-enter:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .btn-enter:active {
            background-color: #004085;
            transform: translateY(0);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    <section class="service-section">
        <h1>NUESTRAS REPARACIONES</h1>
        <h2>¿Qué ofrecemos?</h2>

        <div class="product-list">
            <!-- Servicio 1 -->
            <div class="product-card">
                <img src="{{ asset('imagenes/coche.png') }}" alt="Descripción de la imagen" style="width: 50%; height: auto;">
                <h3>AUTOMÓVIL</h3>
                <a href="{{ route('vistas.automovil') }}" class="btn-enter">Entrar</a>
            </div>

            <!-- Servicio 2 -->
            <div class="product-card">
                <img src="{{ asset('imagenes/camion-grande.png') }}" alt="Descripción de la imagen" style="width: 50%; height: auto;">
                <h3>CAMIONES</h3>
                <a href="{{ route('vistas.camiones') }}" class="btn-enter">Entrar</a>
            </div>

            <!-- Servicio 3 -->
            <div class="product-card">
                <img src="{{ asset('imagenes/frenos.png') }}" alt="Descripción de la imagen" style="width: 50%; height: auto;">
                <h3>BALATAS</h3>
                <a href="{{ route('vistas.balatas') }}" class="btn-enter">Entrar</a>
            </div>
        </div>
    </section>
@endsection

