@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
<<<<<<< HEAD
            <h1 class="text-2xl font-bold">Lista de Training Centers</h1>
            <a href="{{route('training_centers.create')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                + Crear Training Center
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($training_centers as $training_center)
                <div class="bg-white rounded-xl shadow-md p-6 border hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $training_center->name }}</h2>
                    <p><strong>ID:</strong> {{ $training_center->id }}</p>
                    <p><strong>Nombre:</strong> {{ $training_center->name }}</p>

                    <div class="mt-4 flex gap-2">
                        <a href="{{route('training_centers.edit', $training_center->id)}}" class="bg-blue-600 text-white py-1 px-3 rounded hover:bg-blue-900">Editar</a>

                        <form action="{{ route('training_centers.destroy', $training_center->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este centro?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded hover:bg-red-900">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h1>terminar</h1>
@endsection



=======
            <h1>lista de training_center</h1>
            <a href="" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                + crear training_center
            </a>
        </div>
        <div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($training_centers as $training_center)
            <div class="bg-white rounded-2x1 shadow-md p-6 border hover:shadow-lg transition">
                <h2 class"text-xl font-semibold text-gray-800 mb-2">training_center</h2>
                <p> <strong>ID:</strong> {{ $training_center->id }}</p>
                <p> <strong>Name:</strong> {{ $training_center->name }}</p>

                <div class="mt-4 flex flex-col  space-x-2  space-y-0 w-fit">
                    <form action="{{route('training_centers.destroy',  $training_center->id)}}" method="POST" onsubmit="return confirm('seguro que quieres eliminar')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white py-1 rounded hover:bg-red-900">Eliminar</button>
                    </form>

                <a href="" class="bg-blue-600 text-wite py-1 rounded hover:bg-blue-900">editar</a>

                </div>
            </div>
        @endforeach
    </div>
@endsection
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
