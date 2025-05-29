@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-8">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-lg">

        <h1 class="text-2xl font-bold mb-6 text-center">Editar Computador</h1>

        <form action="{{route('computers.update',  $computer->id)}}" method="POST">
            @csrf
            @method('PUT')


            <!-- Número -->
            <div class="mb-4">
                <label for="number" class="block text-gray-700 font-medium mb-1">Número</label>
                <input type="text" name="number" id="number" value="{{ old('number', $computer->number) }}"
                    class="w-full border border-blue-300 focus:border-blue-500 focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
            </div>

            <!-- Marca -->
            <div class="mb-6">
                <label for="brand" class="block text-gray-700 font-medium mb-1">Marca</label>
                <input type="text" name="brand" id="brand" value="{{ old('brand', $computer->brand) }}"
                    class="w-full border border-blue-300 focus:border-blue-500 focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
            </div>

            <!-- Botón -->
            <div class="flex justify-between">
                <a href="{{route('course.index')}}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-xl transition">Regresar</a>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-xl transition">Actulizar</button>
                </div>

        </form>
    </div>
</div>
@endsection

