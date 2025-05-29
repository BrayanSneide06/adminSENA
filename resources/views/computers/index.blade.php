@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">lista de computadores</h1>
            <a href="{{ route('computers.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">+ crear
                computador</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg.grip-cols-3 gap-6">
            @foreach ($computers as $computer)
                <div class="bg-white rounded-2xl shadow-md p-6 border hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Computador</h2>
                    <p>{{ $computer->id }}</p>
                    <p>{{ $computer->number }}</p>
                    <p>{{ $computer->brand }}</p>

                    <div>
                       <form action="{{ route('computers.destroy', $computer->id)}}" method="POST" onsubmit="return confirm('¿seguro que quieres eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500  text-white px-2 py-1 rounded hover:bg-red-900">Eliminar</button>
                            <a href="{{route('computers.edit', $computer->id)}}"
                                class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-700">Editar</a>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
