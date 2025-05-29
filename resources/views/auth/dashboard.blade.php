@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Areas</h2>
                <p class="text-gray-600">Este es el contenido de la primera tarjeta. Puedes agregar más texto o incluso
                    botones aquí.</p>
                <div class="mt-4">
                    <a href="{{ route('user.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Course</h2>
                <p class="text-gray-600">Este es el contenido de la segunda tarjeta. También puedes incluir imágenes,
                    enlaces u otros elementos.</p>
                <div class="mt-4">
<<<<<<< HEAD
                    <a href="{{route('course.index')}}" class="text-indigo-600 hover:underline">Ver más</a>
=======
                    <a href="#" class="text-indigo-600 hover:underline">Ver más</a>
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
                </div>
            </div>


            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Teacher</h2>
                <p class="text-gray-600">Este es el contenido de la segunda tarjeta. También puedes incluir imágenes,
                    enlaces u otros elementos.</p>
                <div class="mt-4">
                    <a href="{{ route('teacher.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Computers</h2>
                <p class="text-gray-600">Este es el contenido de la segunda tarjeta. También puedes incluir imágenes,
                    enlaces u otros elementos.</p>
                <div class="mt-4">
<<<<<<< HEAD
                    <a href="{{ route('computers.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
=======
                    <a href="{{ route('teacher.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">apprentices</h2>
                <p class="text-gray-600">Este es el contenido de la segunda tarjeta. También puedes incluir imágenes,
                    enlaces u otros elementos.</p>
                <div class="mt-4">
<<<<<<< HEAD
                    <a href="{{ route('apprentices.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
=======
                    <a href="{{ route('teacher.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">training_centers</h2>
                <p class="text-gray-600">Este es el contenido de la segunda tarjeta. También puedes incluir imágenes,
                    enlaces u otros elementos.</p>
                <div class="mt-4">
                    <a href="{{ route('training_centers.index') }}" class="text-indigo-600 hover:underline">Ver más</a>
                </div>
            </div>
        </div>
    </div>
@endsection
