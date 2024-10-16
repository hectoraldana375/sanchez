<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($registro) ? __('Editar Producto') : __('Agregar Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b border-gray-200">
                    <!-- Formulario para agregar o editar producto -->
                    <form action="{{ isset($registro) ? route('balatas.update', $registro->id) : route('balatas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($registro))
                            @method('PUT')
                        @endif

                        <!-- Título -->
                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" name="titulo" id="titulo" value="{{ $registro->titulo ?? old('titulo') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>{{ $registro->descripcion ?? old('descripcion') }}</textarea>
                        </div>

                        <!-- Imagen -->
                        <div class="mb-4">
                            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
                            <input type="file" name="imagen" id="imagen" class="mt-1 block w-full text-gray-900 border border-gray-300 rounded-md cursor-pointer focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            @if(isset($registro) && $registro->imagen)
                                <img src="{{ asset($registro->imagen) }}" alt="Imagen Actual" class="mt-2" width="150">
                            @endif
                        </div>

                        <!-- Precio -->
                        <div class="mb-4">
                            <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                            <input type="number" name="precio" id="precio" value="{{ $registro->precio ?? old('precio') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Botón de envío -->
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ isset($registro) ? 'Actualizar Producto' : 'Guardar Producto' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


