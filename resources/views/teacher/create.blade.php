@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
        <h1 class="text-2xl font-semibold mb-6">Crear nuevo teacher</h1>

        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf


            <div class="mb-4">
                <label for="training_center_id" class="block text-gray-700 font-medium mb-2">Centro de Formación</label>
                <select name="training_center_id" id="training_center_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Seleccione un centro</option>
                    @foreach ($trainingCenters as $center)
                        <option value="{{ $center->id }}">{{ $center->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="mb-4">
                <label for="area_id" class="block text-gray-700 font-medium mb-2">Área</label>
                <select name="area_id" id="area_id" class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Seleccione un área</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="name" id="name" placeholder="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{ route('teacher.index') }}"
                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
@endsection
