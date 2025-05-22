<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form method="POST" action="{{ route('register') }}" class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        @csrf

        <h2 class="text-2xl font-bold mb-6 text-center">Registrarse</h2>

        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-600 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="password">Contraseña</label>
            <input type="password" name="password" id="password"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="password_confirmation">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Registrarse
        </button>

        <p class="text-sm text-center mt-4">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Inicia sesión</a>
        </p>
    </form>

</body>
</html>
