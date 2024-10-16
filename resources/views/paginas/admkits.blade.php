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

        /* Estilo para las celdas de la tabla */
        .table-cell {
            white-space: normal; /* Permite que el texto se ajuste a varias líneas */
            max-width: 200px; /* Limita el ancho de la celda */
            overflow-wrap: break-word; /* Permite que el texto largo se divida */
        }
    </style>

    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-5xl mt-12 mb-12">
        <header class="mb-6 flex flex-col items-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Kits</h1>
            <a href="{{ route('kitss.create') }}" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md border border-black hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                Agregar Nuevo Kit
            </a>
        </header>

        <div class="overflow-x-auto flex justify-center"> <!-- Centrar tabla -->
            <table class="min-w-full table-auto mr-4">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Aplicación</th>
                        <th class="px-4 py-2 text-left">Marca</th>
                        <th class="px-4 py-2 text-left">Precio</th>
                        <th class="px-4 py-2 text-left">Observaciones</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($kits as $kit)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 table-cell">{{ $kit->aplicacion }}</td>
                            <td class="px-4 py-2 table-cell">{{ $kit->marca }}</td>
                            <td class="px-4 py-2 text-red-500 font-semibold">${{ number_format($kit->precio, 2) }}</td>
                            <td class="px-4 py-2 table-cell">{{ $kit->observaciones }}</td>
                            <td class="px-4 py-2">
                                <div class="flex justify-end space-x-4"> <!-- Espaciado aumentado aquí -->
                                    <a href="{{ route('kitss.edit', $kit) }}" class="btn btn-primary">
                                        Editar
                                    </a>
                                    <form action="{{ route('kitss.destroy', $kit) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este kit?');">
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
