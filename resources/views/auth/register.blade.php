<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Registro de Usuario</h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700 font-semibold">Nombre:</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('name') 
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div> 
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email') 
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div> 
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Contraseña:</label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('password') 
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div> 
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Confirmar contraseña:</label>
                <input type="password" name="password_confirmation"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</body>
</html>

