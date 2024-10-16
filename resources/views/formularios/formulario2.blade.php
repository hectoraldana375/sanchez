<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Agregar Servicio</title>
</head>
<body class="bg-gray-100">
    <form action="{{ route('reconstructora.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8 mt-10">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Agregar Servicio</h2>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre del Servicio</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" placeholder="Ingrese el nombre del servicio" required>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-semibold mb-2">Imagen del Servicio</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="background_image" class="block text-gray-700 font-semibold mb-2">Imagen de Fondo</label>
            <input type="file" name="background_image" id="background_image" class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>

        <button type="submit" class="mt-6 w-full bg-blue-600 text-white font-semibold py-3 rounded-md shadow hover:bg-blue-700 transition duration-200">Agregar Servicio</button>
    </form>
</body>
</html>
