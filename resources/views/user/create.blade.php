@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
    <h1 class="text-2xl font-semibold mb-6">Crear nuevo curso</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <!-- Número de curso -->
        <div class="mb-4">
            <label for="id" class="block text-gray-700 font-medium mb-2">Número del Area</label>
            <input type="text" name="id" id="id" placeholder="Número"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>

        <!-- Día -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Día</label>
            <input type="text" name="name" id="name" placeholder="name"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>



        <!-- Botones de acción -->
        <div class="flex justify-end mt-6 space-x-2">
              <a href="{{ route('user.index') }}"  class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection

