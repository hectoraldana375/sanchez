@extends('layouts.cliente')

@section('title', 'Lista de Aceites')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-cover bg-fixed" style="background-image: url('https://http2.mlstatic.com/D_NQ_NP_902086-MLA74845825234_032024-OO.jpg')">
    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-5xl mt-12 mb-12">
        <header class="flex flex-col items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Lubricantes, Adhesivos y Aditivos</h1>
            <a href="{{ route('refaccionariaa') }}" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md border border-black hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                Regresar
            </a>
        </header>

        <div class="mb-4 flex justify-center">
            <input type="text" id="searchInput" placeholder="Buscar aceite..." onkeyup="filterProducts()" class="w-full max-w-md px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-green-400 focus:outline-none">
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-green-500 text-black">
                    <tr>
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-center">Marca</th>
                        <th class="px-4 py-2 text-center">Descripción</th>
                        <th class="px-4 py-2 text-center">L/ml/g</th>
                        <th class="px-4 py-2 text-center">Precio</th>
                    </tr>
                </thead>
                <tbody id="productTableBody" class="bg-white divide-y divide-gray-200">
                    @forelse ($aceites as $aceite)
                        <tr class="hover:bg-gray-100 cursor-pointer" onclick="showDescription('{{ addslashes($aceite->descripcion) }}')">
                            <td class="px-4 py-2">{{ $aceite->nombre }}</td>
                            <td class="px-4 py-2 text-center">{{ $aceite->marca }}</td>
                            <td class="px-4 py-2 text-center max-w-xs truncate overflow-hidden" title="{{ $aceite->descripcion }}">
                                {{ $aceite->descripcion }}
                            </td>
                            <td class="px-4 py-2 text-center">{{ $aceite->litros }} </td>
                            <td class="px-4 py-2 text-center text-red-500 font-semibold">${{ number_format($aceite->precio, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center">No hay aceites disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal -->
    <div id="descriptionModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 max-w-md">
            <center><h2 class="text-xl font-bold mb-2">Descripción Completa</h2></center>
            <p id="fullDescription" class="text-gray-800"></p>
            <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white font-bold rounded-lg hover:bg-red-600 focus:outline-none">Cerrar</button>
        </div>
    </div>
</div>
@endsection

<script>
    function filterProducts() {
        var input, filter, table, tbody, tr, td, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        table = document.querySelector('table');
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

    function showDescription(description) {
        document.getElementById('fullDescription').innerText = description;
        document.getElementById('descriptionModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('descriptionModal').classList.add('hidden');
    }
</script>
