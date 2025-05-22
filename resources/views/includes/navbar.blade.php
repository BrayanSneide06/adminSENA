<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar con Dropdown en la Esquina</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center space-x-4">
          <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-blue-600">
            <svg class="h-6 w-6 mr-1 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>

            <a href="{{route('dashboard')}}"><span class="font-bold text-xl ">Commerceplus</span></a>
            
          </a>
        </div>

        <!-- Dropdown en la esquina derecha -->
        <div class="relative">
          <button id="dropdownBtn" class="py-2 px-4 bg-black text-white rounded hover:bg-gray-800">
            Menú
          </button>

          <!-- Menú desplegable -->
          <div id="dropdownMenu"
               class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden z-50">
            <a href="{{route('user.index')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Area</a>
            <a href="{{route('teacher.index')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Teacher</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">computers</a>
             <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Course</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">apprentices</a>
               <a href="{{ route('training_centers.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">training_centers</a>
          </div>
        </div>

        <!-- Botón menú móvil (opcional) -->
        <div class="md:hidden flex items-center ml-4">
          <button class="mobile-menu-button">
            <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
            </svg>
          </button>
        </div>

      </div>
    </div>
  </nav>

  <!-- Script para el dropdown -->
  <script>
    const dropdownBtn = document.getElementById("dropdownBtn");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownBtn.addEventListener("click", () => {
      dropdownMenu.classList.toggle("hidden");
    });

    // Cerrar si se hace clic fuera del menú
    window.addEventListener("click", (e) => {
      if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add("hidden");
      }
    });
  </script>

</body>
</html>





