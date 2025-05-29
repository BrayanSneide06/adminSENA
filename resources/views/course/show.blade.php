@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Detalles del Curso</h1>

        <div class="bg-white rounded-xl shadow p-6 border">
            <p class="text-gray-700 mb-2"><strong>ID:</strong> {{ $course->id }}</p>
            <p class="text-gray-700 mb-2"><strong>Número de Curso:</strong> {{ $course->course_number }}</p>
            <p class="text-gray-700 mb-2"><strong>Día:</strong> {{ $course->day }}</p>
            <p class="text-gray-700 mb-2"><strong>Área:</strong> {{ $course->area->name }}</p>
            <p class="text-gray-700 mb-2"><strong>Centro de Formación:</strong> {{ $course->trainingCenter->name }}</p>
        </div>

        <a href="{{ route('course.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">
            ← Volver a la lista
        </a>
    </div>
@endsection
