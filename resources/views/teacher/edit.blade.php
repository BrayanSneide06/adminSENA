<<<<<<< HEAD
 @extends('layouts.app')
=======
@extends('layouts.app')
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-8">
        <div
            class="w-full max-w-lg bg-white rounded-3xl shadow-2xl p-8 transform transition-all duration-300 hover:scale-[1.01]">
            <h1 class="text-3xl font-extrabold text-blue-600 mb-6 text-center">Editar Docente</h1>

            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $teacher->name) }}"
                        class="w-full border border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $teacher->email) }}"
                        class="w-full border border-blue-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-xl px-4 py-2 shadow-sm transition duration-200">
                </div>
<<<<<<< HEAD
 
=======

>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
                <div class="flex justify-between">
                    <a href="{{ route('teacher.index') }}"
                        class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-xl transition">Regresar</a>
                    <button type="submit"
                     class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl transition">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
