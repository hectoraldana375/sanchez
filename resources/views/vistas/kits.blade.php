@extends('layouts.cliente')

@section('title', 'Lista de Kits')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-cover bg-fixed" style="background-image: url('https://http2.mlstatic.com/D_NQ_NP_902086-MLA74845825234_032024-OO.jpg')">
    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-5xl mt-12 mb-12">
        <header class="flex flex-col items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Kits de Chevrolet</h1>
            <a href="{{ route('refaccionariaa') }}" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md border border-black hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                Regresar
            </a>
        </header>

        <div class="mb-4 flex justify-center">
            <input type="text" id="searchInput" placeholder="Buscar kit..." onkeyup="filterProducts()" class="w-full max-w-md px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-green-400 focus:outline-none">
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-green-500 text-black">
                    <tr>
                        <th class="px-4 py-2 text-center">Aplicación</th>
                        <th class="px-4 py-2 text-center">Marca</th>
                        <th class="px-4 py-2 text-center">Precio</th>
                        <th class="px-4 py-2 text-center">Observaciones</th>
                    </tr>
                </thead>
                <tbody id="productTableBody" class="bg-white divide-y divide-gray-200">
                    @forelse ($kits as $kit)
                        <tr class="hover:bg-gray-100 cursor-pointer" onclick="showDescription('{{ addslashes($kit->aplicacion) }}', '{{ addslashes($kit->descripcion_detallada) }}')">
                            <td class="px-4 py-2 max-w-xs truncate overflow-hidden text-center" title="{{ $kit->aplicacion }}">
                                {{ $kit->aplicacion }}
                            </td>
                            <td class="px-4 py-2 text-center">{{ $kit->marca }}</td>
                            <td class="px-4 py-2 text-red-500 font-semibold text-center">${{ number_format($kit->precio, 2) }}</td>
                            <td class="px-4 py-2 text-center">{{ $kit->observaciones }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center">No hay kits disponibles.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal -->
    <div id="descriptionModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 max-w-md">
           <center> <h2 class="text-xl font-bold mb-2">Información Detallada</h2></center>
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

    function showDescription(aplicacion, descripcion) {
        const descriptionHTML = `<strong>Aplicación:</strong> ${aplicacion}<br><br><strong></strong><ul>${descripcion}</ul>`;
        document.getElementById('fullDescription').innerHTML = descriptionHTML;
        document.getElementById('descriptionModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('descriptionModal').classList.add('hidden');
    }
</script>
