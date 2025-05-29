@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Lista de curso</h1>
            <a href="{{ route('course.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                + crear curso </a>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($courses as $course)
                <div class="bg-white rounded-2xl shadow-md p-6 border hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">curso</h2>
                    <p class="text-gray-600"><strong>ID : </strong>{{ $course->id }}</p>
                    <p class="text-gray-600"><strong>Numero curso : </strong> {{ $course->course_number }}</p>
                    <p class="text-gray-600"><strong>Name : </strong> {{ $course->day }}</p>

                    <div class="mt-4 flex-col space-y-0 space-x-2 w-fit">
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                            onsubmit="return confirm('¿seguro que quieres eliminar?')">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submi"
                                class="bg-red-500  text-white px-2 py-1 rounded hover:bg-red-900">Eliminar</button>
                        </form>
                        <a href="{{ route('course.edit', $course->id) }}"
                            class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-700">editar</a>

                        <a href="{{ route('course.show', $course->id) }}" class="text-blue-600 hover:underline">ver más</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
