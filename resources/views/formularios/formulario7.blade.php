<x-app-layout>
    <section class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-md mt-12 mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ isset($kit) ? 'Editar Kit' : 'Agregar Nuevo Kit' }}</h1>

        <form action="{{ isset($kit) ? route('kitss.update', $kit) : route('kitss.store') }}" method="POST">
            @csrf
            @if(isset($kit))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="aplicacion" class="block text-gray-700">Aplicación</label>
                <input type="text" name="aplicacion" id="aplicacion" value="{{ $kit->aplicacion ?? '' }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="marca" class="block text-gray-700">Marca</label>
                <input type="text" name="marca" id="marca" value="{{ $kit->marca ?? '' }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="observaciones" class="block text-gray-700">Observaciones</label>
                <textarea name="observaciones" id="observaciones" class="w-full border border-gray-300 p-2 rounded">{{ $kit->observaciones ?? '' }}</textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-gray-700">Precio</label>
                <input type="number" name="precio" id="precio" value="{{ $kit->precio ?? '' }}" required step="0.01" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">{{ isset($kit) ? 'Actualizar' : 'Agregar' }}</button>
        </form>
    </section>
</x-app-layout>
