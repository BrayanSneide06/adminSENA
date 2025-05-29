@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
            class="fixed top-5 right-5 z-50 bg-white border-l-4 border-emerald-500 shadow-lg rounded-lg p-4 max-w-sm w-full"
            @click.outside="show = false">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <div class="ml-3">
                    <p class="text-sm font-semibold text-emerald-800">
                        {{ session('success') }}
                    </p>
                </div>
                <button @click="show = false" class="ml-auto text-emerald-400 hover:text-emerald-600 transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="container mx-auto px-4 py-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Lista de Teachers</h1>
            <a href="{{ route('teacher.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                + Crear Curso
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($teachers as $teacher)
                <div class="bg-white rounded-2xl shadow-md p-6 border hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Teachers</h2>
                    <p class="text-gray-600"><strong>ID:</strong> {{ $teacher->id }}</p>
                    <p class="text-gray-600"><strong>Nombre:</strong> {{ $teacher->name }}</p>
                    <p class="text-gray-600"><strong>Email:</strong> {{ $teacher->email }}</p>

                    <div class="mt-4 flex fex-col space-y-0 space-x-2 w-fit">
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST"
                            onsubmit="return confirm('¿Seguro que quiere eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-900">Eliminar</button>
                        </form>

                        <a href="{{ route('teacher.edit', $teacher->id) }}"
                            class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-700">editar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
