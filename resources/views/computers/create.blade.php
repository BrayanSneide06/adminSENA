@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow space-x-2">
        <h1 class="text-2x1 font-semibold mb-6">crear nuevo computador</h1>


        <form action="{{ route('computers.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="number" class="block text-gray-700 font-medium mb-2">Numero</label>
                <input type="text" name="number" placeholder="number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="brand" class="block text-gray-700 font-medium mb-2">Marca</label>
                <input type="text" name="brand" placeholder="brand"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2">
            </div>


            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{route('computers.index')}}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</a>
               <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
@endsection
