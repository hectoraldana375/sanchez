<x-app-layout>
    <style>
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
        }

        .btn-danger:hover {
            background-color: #c82333;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-danger:active {
            background-color: #bd2130;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Limitar el texto de descripción a 3 líneas */
        .table-cell-description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            max-width: 200px;
        }
    </style>

    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-5xl mt-12 mb-12">
        <header class="mb-6 flex flex-col items-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Lubricantes, Adhesivos y Aditivos</h1>
            <a href="{{ route('aceites.create') }}" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md border border-black hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                Agregar Nuevo Aceite
            </a>
        </header>

        <div class="overflow-x-auto flex justify-center"> <!-- Centrar tabla -->
            <table class="min-w-full table-auto mr-4">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Marca</th>
                        <th class="px-4 py-2 text-left">Descripción</th>
                        <th class="px-4 py-2 text-left">L/ml/g</th>
                        <th class="px-4 py-2 text-left">Precio</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($aceites as $aceite)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">{{ $aceite->nombre }}</td>
                            <td class="px-4 py-2">{{ $aceite->marca }}</td>
                            <td class="px-4 py-2 table-cell-description">{{ $aceite->descripcion }}</td>
                            <td class="px-4 py-2">{{ $aceite->litros }}</td>
                            <td class="px-4 py-2 text-red-500 font-semibold">${{ number_format($aceite->precio, 2) }}</td>
                            <td class="px-4 py-2">
                                <div class="flex justify-end space-x-4"> <!-- Espaciado aumentado aquí -->
                                    <a href="{{ route('aceites.edit', $aceite) }}" class="btn btn-primary">
                                        Editar
                                    </a>
                                    <form action="{{ route('aceites.destroy', $aceite) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este aceite?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
