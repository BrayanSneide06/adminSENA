@extends('layouts.app')


@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Editar Curso</h1>

<<<<<<< HEAD
    <form action="{{ route('user.update', $area->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
=======
    <form action="{{ route('user.update', $course->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
        @csrf
        @method('PUT')

        <div class="mb-4 flex">
<<<<<<< HEAD
            <label for="di" class="block text-gray-700 font-bold mb-2">Número de Area:</label>
            <input type="text" name="id" id="id" value="{{ old('id', $area->id) }}" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $area->day) }}" class="w-full border border-gray-300 p-2 rounded" required>
=======
            <label for="course_number" class="block text-gray-700 font-bold mb-2">Número de Curso:</label>
            <input type="text" name="course_number" id="course_number" value="{{ old('course_number', $course->course_number) }}" class="w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="day" class="block text-gray-700 font-bold mb-2">Día:</label>
            <input type="text" name="day" id="day" value="{{ old('day', $course->day) }}" class="w-full border border-gray-300 p-2 rounded" required>
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
        </div>

        <div class="flex items-center justify-between">
         <a href="{{ route('user.index') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar</button>  
        </div>
    </form>
<<<<<<< HEAD
    
=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
</div>
@endsection
