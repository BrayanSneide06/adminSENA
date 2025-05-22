<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Models\TrainingCenter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí se registran las rutas web de tu aplicación.
| Estas rutas son cargadas por RouteServiceProvider y 
| están dentro del grupo de middleware "web".
|--------------------------------------------------------------------------
*/

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});


// =======================
// RUTAS DE AUTENTICACIÓN
// =======================

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (solo usuarios autenticados)
Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware('auth')->name('dashboard');


// ====================
// CRUD DE ÁREAS (AREA)
// ====================

// Listado de áreas
Route::get('/area', [AreaController::class, 'index'])->name('user.index');

// Formulario de creación
Route::get('/area/create', [AreaController::class, 'create'])->name('user.create');

// Guardar nueva área
Route::post('/area', [AreaController::class, 'store'])->name('user.store');

// Editar área
Route::get('/user/{course}/edit', [AreaController::class, 'edit'])->name('user.edit');

// Actualizar área
Route::put('/user/{course}', [AreaController::class, 'update'])->name('user.update');

// Eliminar área
Route::delete('/user/{course}', [AreaController::class, 'destroy'])->name('user.destroy');


// =======================
// CRUD DE DOCENTES (TEACHER)
// =======================

// Listado de docentes
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');

// Formulario de creación
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');

// Guardar nuevo docente
Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');

// Editar docente
Route::get('/teacher/{teacher}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');


//actuliza docente

Route::put('/teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');

// Eliminar docente
Route::delete('/teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');



// =======================
// training_centers 
// =======================


Route::get('/training_centers', [TrainingCenterController::class, 'index'])->name('training_centers.index');

Route::delete('/training_centers/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_centers.destroy');

