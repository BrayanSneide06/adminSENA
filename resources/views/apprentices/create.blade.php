@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
        <h1 class="text-2xl font-semibold mb-6"> crear nuevo aprendiz </h1>

        <form action="{{route('apprentices.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="course_id" class="block text-gray-700 font-medium mb-2">Dia</label>
                <select name="course_id" id="course_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Seleccione un Dia</option>
                    @foreach ($courses as  $course)
                        <option value="{{$course->id}}">{{ $course->day}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="computer_id" class="block text-gray-700 font-medium mb-2">Computador</label>
                <select name="computer_id" id="computer_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
                    <option value="">Seleccione un Computador</option>
                    @foreach ($computers as  $computer)
                        <option value="{{ $computer->id}}">{{ $computer->brand}}</option>
                    @endforeach
                </select>
            </div>


              <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nombre</label>
                <input type="text" name="name" id="name" placeholder="name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>


              <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">email</label>
                <input type="text" name="email" id="email" placeholder="email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>


              <div class="mb-4">
                <label for="cell_number" class="block text-gray-700 font-medium mb-2">cell_number</label>
                <input type="text" name="cell_number" id="cell_number" placeholder="cell_number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>


              <div class="flex justify-end mt-6 space-x-2">
                <a href="{{ route('apprentices.index') }}"
                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>

        </form>
    </div>
@endsection
