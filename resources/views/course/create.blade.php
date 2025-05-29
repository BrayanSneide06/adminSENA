@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
        <h1 class="text-2x1 font-semibold mb-6">crear nuevo curso</h1>


        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="area_id" class="block text-gray-700 font-medium mb-2">Area</label>
                <select name="area_id" id="area_id" class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Seleccione un centro</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="" class="block text-gray-700 font-medium mb-2">Centro</label>
                <select name="training_center_id" id="training_center_id"
                    class="w-full border-gray-300 rounded-lg px-4 py-2">
                    <option value="">seleciones un centro</option>
                    @foreach ($trainings_center_id as $training_center_id)
                        <option value="{{ $training_center_id->id }}">{{ $training_center_id->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-4">
                <label for="id" class="block text-gray-700 font-medium mb-2">ID</label>
                <input type="text" name="id" placeholder="id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="course_number" class="block text-gray-700 font-medium mb-2">numero curso</label>
                <input type="course_number" name="course_number" placeholder="numero curso"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>



            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Dia</label>
                <input type="text" name="day" placeholder="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>


            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{ route('course.index') }}"
                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
@endsection
