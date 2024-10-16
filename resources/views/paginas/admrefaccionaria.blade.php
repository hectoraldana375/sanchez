<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Refaccionaria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section class="service-section">
            <h1>NUESTROS PRODUCTOS</h1>
            <h2>¿Qué ofrecemos?</h2>

            <div class="product-list">
                <!-- Servicio 1 -->
                <div class="product-card">
                    <img src="https://cdn.icon-icons.com/icons2/2070/PNG/512/car_icon_126167.png" alt="Automóvil">
                    <h3>ACEITES</h3>
                    <a href="{{ route('vistas.aceites') }}" class="btn-enter">Entrar</a>
                </div>

                <!-- Servicio 2 -->
                <div class="product-card">
                    <img src="https://static.vecteezy.com/system/resources/previews/005/267/471/non_2x/truck-white-icon-vector.jpg" alt="Camiones">
                    <h3>BALATAS NUEVAS</h3>
                    <a href="{{ route('vistas.balatas_nuevas') }}" class="btn-enter">Entrar</a>
                </div>

                <!-- Servicio 3 -->
                <div class="product-card">
                    <img src="https://static.vecteezy.com/system/resources/previews/006/059/934/non_2x/car-brake-icon-on-black-background-vector.jpg" alt="Balatas">
                    <h3>BALATAS RECONSTRUIDAS</h3>
                    <a href="{{ route('vistas.balatas_reconstruidas') }}" class="btn-enter">Entrar</a>
                </div>

                <!-- Servicio 4 -->
                <div class="product-card">
                    <img src="https://static.vecteezy.com/system/resources/previews/006/059/934/non_2x/car-brake-icon-on-black-background-vector.jpg" alt="Balatas">
                    <h3>CLUTCHS</h3>
                    <a href="{{ route('vistas.kits') }}" class="btn-enter">Entrar</a>
                </div>

                <!-- Servicio 5 -->
                <div class="product-card">
                    <img src="https://static.vecteezy.com/system/resources/previews/006/059/934/non_2x/car-brake-icon-on-black-background-vector.jpg" alt="Balatas">
                    <h3>VARIOS</h3>
                    <a href="{{ route('vistas.varios') }}" class="btn-enter">Entrar</a>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
    }

    .service-section {
        background: url('https://sp-ao.shortpixel.ai/client/q_glossy,ret_img,w_1920,h_945/https://refaccionariajorge.com.mx/wp-content/uploads/2018/02/slide.jpg') no-repeat center center fixed;
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
        color: #fff; /* Asegurar que el texto se mantenga blanco al pasar el mouse */
    }

    .btn-enter:active {
        background-color: #004085;
        transform: translateY(0);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
