@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-semibold mb-6">Crear nuevo Training Center</h1>

        <form action="{{route('training_centers.store')}}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre del centro" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
            </div>

            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{route('training_centers.index')}}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Crear</button>
            </div>
        </form>
    </div>
@endsection

