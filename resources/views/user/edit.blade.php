@extends('layouts.app')


@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Editar Curso</h1>

    <form action="{{ route('user.update', $area->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4 flex">
            <label for="di" class="block text-gray-700 font-bold mb-2">Número de Area:</label>
            <input type="text" name="id" id="id" value="{{ old('id', $area->id) }}" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $area->day) }}" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="flex items-center justify-between">
         <a href="{{ route('user.index') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar</button>  
        </div>
    </form>
    
</div>
@endsection
