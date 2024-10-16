<x-app-layout>
    <div class="py-12 flex flex-col items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <form action="{{ isset($aceite) ? route('aceites.update', $aceite) : route('aceites.store') }}" method="POST">
                @csrf
                @if(isset($aceite))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $aceite->nombre ?? '' }}" required class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-4">
                    <label for="marca" class="block text-gray-700 font-bold">Marca</label>
                    <input type="text" name="marca" id="marca" value="{{ $aceite->marca ?? '' }}" required class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 font-bold">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="3" required class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">{{ $aceite->descripcion ?? '' }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="litros" class="block text-gray-700 font-bold">Litros</label>
                    <input type="text" name="litros" id="litros" value="{{ $aceite->litros ?? '' }}" required class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="mb-4">
                    <label for="precio" class="block text-gray-700 font-bold">Precio</label>
                    <input type="number" name="precio" id="precio" step="0.01" value="{{ $aceite->precio ?? '' }}" required class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600">{{ isset($aceite) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
