@extends('layouts.cliente')

@section('title', 'Personal')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
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
            width:100%;
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

        /* Sección del personal */
        .team-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            width: 30%;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .team-member img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .team-member h3 {
            font-size: 1.6rem;
            font-weight: bold;
            color: #333;
            margin: 20px 0 10px;
        }

        .team-member p {
            font-size: 1.1rem;
            color: #666;
            margin: 0 20px 20px;
            line-height: 1.6;
        }

        /* Adaptabilidad para dispositivos móviles */
        @media (max-width: 768px) {
            .team-member {
                width: 90%;
                margin: 0 auto 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Sección principal (hero) con carrusel de fondo -->
    <div class="hero-section">
        <div class="carousel-section">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img,w_1920,h_945/https://refaccionariajorge.com.mx/wp-content/uploads/2018/02/slide.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.es.wired.com/photos/635800d4aeb677295fc63673/16:9/w_2560%2Cc_limit/Computerized-Cars-Killing-Auto-Repair-Shops-Business-1333765701.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://kashimasystem.com/wp-content/uploads/2020/05/limpieza-herramientas-covid.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-content">
            <h1>CONOCE A NUESTRO PERSONAL</h1>
        </div>
    </div>

    <!-- Sección del personal -->
    <div class="team-section">
        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 1">
            <h3>Mauricio Martinez Trejo</h3>
            <p>Especialista en mecánica automotriz con más de 15 años de experiencia en reparación y mantenimiento de vehículos. Apasionado por el detalle y la calidad en cada trabajo.</p>
        </div>

        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 2">
            <h3>Marco Antonio Martinez Cervantez</h3>
            <p>Experta en sistemas de frenos y clutch. Con una carrera destacada en la industria, se enfoca en ofrecer soluciones efectivas y duraderas para todos los clientes.</p>
        </div>

        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 3">
            <h3>Gabriel Martinez Trejo</h3>
            <p>Con amplia experiencia en rectificación de discos y reparación de componentes automotrices. Su habilidad técnica y profesionalismo aseguran un servicio de primera clase.</p>
        </div>

        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 3">
            <h3>Crecensencio Martinez Recendiz</h3>
            <p>Con amplia experiencia en rectificación de discos y reparación de componentes automotrices. Su habilidad técnica y profesionalismo aseguran un servicio de primera clase.</p>
        </div>

        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 3">
            <h3>Magdaleno Martinez Trejo</h3>
            <p>Con amplia experiencia en rectificación de discos y reparación de componentes automotrices. Su habilidad técnica y profesionalismo aseguran un servicio de primera clase.</p>
        </div>

        <!-- Miembro del equipo -->
        <div class="team-member">
            <img src="https://via.placeholder.com/800x600" alt="Miembro 3">
            <h3>Israel Ramirez Martinez</h3>
            <p>Con amplia experiencia en rectificación de discos y reparación de componentes automotrices. Su habilidad técnica y profesionalismo aseguran un servicio de primera clase.</p>
        </div>
    </div>

</body>
</html>

@endsection
