@extends('layouts.cliente')

@section('title', 'Contáctenos')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Tipografía sans-serif */
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333; /* Color de texto general */
        }

        h1 {
            text-align: center;
            color: #333333;
            margin: 40px 0;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .intro-text {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            color: #414141;
            font-size: 1rem;
            margin-bottom: 40px;
        }

        .contact-section {
            display: flex;
            justify-content: center;
            padding: 40px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .contact-info {
            width: 100%;
            max-width: 600px;
            background-color: #f4f4f4;
            color: #333;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 8px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .contact-item .contact-icon {
            font-size: 2rem;
            color: #000000;
            margin-right: 15px;
        }

        .contact-item .contact-details {
            color: #333;
        }

        .contact-item h2 {
            color: #000000;
            font-size: 1.4rem;
            margin: 0;
        }

        .contact-item p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .contact-item a {
            color: #000000;
            text-decoration: none;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        .map-section {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            overflow: hidden;
        }

        .map-section iframe {
            width: 100%;
            height: 400px;
            border: none;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .social-icons a {
            color: #000000;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #000000;
        }
    </style>
</head>
<body>
    <h1>CONTÁCTENOS</h1>
    

    <div class="contact-section">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">📍</div>
                <div class="contact-details">
                    <h2>HABLA A:</h2>
                    <p>Blas Escontria 10, Mendez, 79050 Cdad. Valles, S.L.P.</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">📧</div>
                <div class="contact-details">
                    <h2>EMAIL:</h2>
                    <p><a href="mailto:hello@company.com">hello@company.com</a></p>
                    <p><a href="mailto:support@company.com">support@company.com</a></p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <div class="contact-details">
                    <h2>LLÁMANOS:</h2>
                    <p>(1) 234 567 891</p>
                    <p>(1) 234 987 654</p>
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-icon">💬</div>
                <div class="contact-details">
                    <h2>CONTÁCTENOS:</h2>
                    <p>Póngase en contacto con nosotros para una cotización, ayuda o únase al equipo.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1543.9693014335585!2d-99.0001711728367!3d21.98272975669521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d66d199a688973%3A0x85c2b023d57daf51!2sReconstructora%20de%20Clutch%20y%20balatas%20valles!5e1!3m2!1ses!2smx!4v1723581657316!5m2!1ses!2smx"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
@endsection
