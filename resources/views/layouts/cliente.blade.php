<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('img/img1.png') }}" type="image/x-icon"/>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <head>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Otros enlaces de CSS que uses -->
        </head>
        <body>
            <!-- Tu contenido principal -->

            <!-- Bootstrap JS (antes del cierre de body) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
<body>

@include('layouts.nav') <!-- Barra lateral para el panel de administración -->

<div class="admin-content">
    @yield('content') <!-- Contenido específico del panel de administración -->
    @yield('breeze_content') <!-- Sección para la vistas -->
</div>

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
