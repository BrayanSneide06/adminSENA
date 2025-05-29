@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
    <h1 class="text-2xl font-semibold mb-6">Crear nuevo curso</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <!-- Número de curso -->
        <div class="mb-4">
<<<<<<< HEAD
            <label for="id" class="block text-gray-700 font-medium mb-2">Número del Area</label>
            <input type="text" name="id" id="id" placeholder="Número"
=======
            <label for="course_number" class="block text-gray-700 font-medium mb-2">Número de Curso</label>
            <input type="text" name="course_number" id="course_number" placeholder="Número"
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>

        <!-- Día -->
        <div class="mb-4">
<<<<<<< HEAD
            <label for="name" class="block text-gray-700 font-medium mb-2">Día</label>
            <input type="text" name="name" id="name" placeholder="name"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>


=======
            <label for="day" class="block text-gray-700 font-medium mb-2">Día</label>
            <input type="text" name="day" id="day" placeholder="Día"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>

        <!-- Área ID -->
        <div class="mb-4">
            <label for="area_id" class="block text-gray-700 font-medium mb-2">Área</label>
            <input type="number" name="area_id" id="area_id" placeholder="ID del área"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>

        <!-- Centro de formación -->
        <div class="mb-4">
            <label for="training_center_id" class="block text-gray-700 font-medium mb-2">Centro de Formación</label>
            <input type="number" name="training_center_id" id="training_center_id" placeholder="ID del centro"
                class="w-full border border-gray-300 rounded-lg px-4 py-2">
        </div>
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e

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

