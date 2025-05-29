@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Lista de aprendices</h1>
            <a href="{{ route('apprentices.create')}}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                + Crear aprendiz</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($aprendices as $aprendiz)
                <div class="bg-white rounded-2xl shadow-md p-6 border hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Aprendiz</h2>
                    <p class="text-gray-600"><strong>Id:</strong> {{ $aprendiz->id }}</p>
                    <p class="text-gray-600"><strong>Nombre:</strong> {{ $aprendiz->name }}</p>
                    <a href="{{route('apprentices.show', $aprendiz->id)}}" class="text-yellow-500 underline">Ver más</a>

                    <div class="mt-4 flex flex-col space-y-2 w-fit">
                        <form action="{{ route('apprentices.destroy', $aprendiz->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-900"
                                onclick="return confirm('¿Estás seguro de que deseas eliminar este aprendiz?')">
                                Eliminar
                            </button>
                        </form>

                        <a href="{{route('apprentices.edit', $aprendiz->id) }}"
                            class="bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-900">Editar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
