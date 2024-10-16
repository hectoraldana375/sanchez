@extends('layouts.cliente')

@section('title', 'Lista de Productos')

@section('content')
<div class="py-12 min-h-screen flex flex-col items-center justify-center bg-fixed bg-center bg-cover" style="background-image: url('https://autoland.com.pe/wp-content/uploads/2024/05/sintomas-embrague-gastado.jpg'); background-position: center;">
    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-5xl mt-12 mb-12">
        <header class="flex flex-col items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Clucth Nuevos y Reconstruidos (Chevrolet)</h1>
            <a href="{{ route('refaccionariaa') }}" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md border border-black hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                Regresar
            </a>
        </header>

        <div class="mb-4 flex justify-center">
            <input type="text" id="searchInput" placeholder="Buscar producto..." onkeyup="filterProducts()" class="w-full max-w-md px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-green-400 focus:outline-none">
        </div>



        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Marca</th>
                        <th class="px-4 py-2 text-left">Descripción</th>
                        <th class="px-4 py-2 text-left">Litros</th>
                        <th class="px-4 py-2 text-left">Precio</th>
                    </tr>
                </thead>
                <tbody id="productTableBody" class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">Aceite de Motor Sintético</td>
                        <td class="px-4 py-2">Mobil 1</td>
                        <td class="px-4 py-2 max-w-xs truncate">Aceite de motor sintético de alto rendimiento.</td>
                        <td class="px-4 py-2">5 L</td>
                        <td class="px-4 py-2 text-red-500 font-semibold">$45.00</td>
                    </tr>


                    <!-- Repite el bloque anterior para cada producto adicional -->
                </tbody>
            </table>
        </div>
    </section>
</div>
<script>
    function filterProducts() {
        var input, filter, table, tbody, tr, td, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        tbody = document.getElementById('productTableBody');
        tr = tbody.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('td');
            let matched = false;
            for (var j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        matched = true;
                        break;
                    }
                }
            }
            tr[i].style.display = matched ? '' : 'none';
        }
    }
</script>
@endsection
