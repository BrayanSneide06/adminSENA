@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Detalles del Aprendiz</h1>

        <div class="bg-white rounded-xl shadow p-6 border">
            <p class="text-gray-700 mb-2"><strong>Nombre:</strong> {{ $apprentice->name }}</p>
            <p class="text-gray-700 mb-2"><strong>Email:</strong> {{ $apprentice->email }}</p>
            <p class="text-gray-700 mb-2"><strong>Curso:</strong> {{ $apprentice->course->name ?? 'Sin curso' }}</p>
            <p class="text-gray-700 mb-2"><strong>Día del curso:</strong> {{ $apprentice->course->day ?? 'No registrado' }}</p>
            <p class="text-gray-700 mb-2"><strong>Computador asignado:</strong> {{ $apprentice->computer->brand ?? 'Sin computador' }}</p>
        </div>

        <a href="{{ route('apprentices.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">
            ← Volver a la lista
        </a>
    </div>
@endsection

