@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-8">
        <div  class="w-full max-w-lg bg-white rounded-3xl shadow-2xl p-8 transform transition-all duration-300 hover:scale-[1.01]">

            <h1 class="text-2xl font-bold mb-4">Editar Curso</h1>

            <form action="{{route('course.update', $course->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" value="{{ old('id', $course->id) }}"
                        class="w-full border border-blue-300 focus:border-blue-500 focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
                </div>
                <div class="mb-4">
                    <label for="course_number">Numero Curso</label>
                    <input type="text" name="course_number" id="course_number"
                        value ="{{ old('course_number', $course->course_number) }}"
                        class="w-full border border-blue-300 focus:border-blue-500 focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
                </div>

                <div>
                    <label for="day">Dia</label>
                    <input type="text" name="day" id="day" value="{{ old('day', $course->day) }}"
                        class="w-full border border-blue-300 focus:border-blue-500 focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
                </div>

                <div class="flex justify-between">
                <a href="{{route('course.index')}}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-xl transition">Regresar</a>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-xl transition">Actulizar</button>
                </div>

            </form>

        </div>


    </div>
@endsection
