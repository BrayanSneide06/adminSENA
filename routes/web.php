<?php

<<<<<<< HEAD
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ComputerController;
=======
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
<<<<<<< HEAD
use App\Models\Course;
=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
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


<<<<<<< HEAD
// =======================
// training_centers 
// =======================

Route::get('/training_centers', [TrainingCenterController::class, 'index'])->name('training_centers.index');

Route::get('/training_centers/create', [TrainingCenterController::class, 'create'])->name('training_centers.create');

Route::post('/create', [TrainingCenterController::class, 'store'])->name('training_centers.store');

Route::get('/training_centers/{training_center}/edit', [TrainingCenterController::class, 'edit'])->name('training_centers.edit');

Route::put('/training_centers/{training_center}', [TrainingCenterController::class, 'update'])->name('training_centers.update');

Route::delete('/training_centers/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_centers.destroy');


=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
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
<<<<<<< HEAD
Route::get('/user/{area}/edit', [AreaController::class, 'edit'])->name('user.edit');

// Actualizar área
Route::put('/user/{area}', [AreaController::class, 'update'])->name('user.update');

// Eliminar área
Route::delete('/user/{area}', [AreaController::class, 'destroy'])->name('user.destroy');
=======
Route::get('/user/{course}/edit', [AreaController::class, 'edit'])->name('user.edit');

// Actualizar área
Route::put('/user/{course}', [AreaController::class, 'update'])->name('user.update');

// Eliminar área
Route::delete('/user/{course}', [AreaController::class, 'destroy'])->name('user.destroy');
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e


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

<<<<<<< HEAD
// Actualiza docente
=======

//actuliza docente

>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
Route::put('/teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');

// Eliminar docente
Route::delete('/teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');


<<<<<<< HEAD
// =======================
// courses
// =======================

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');

Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');

Route::post('/courses', [CourseController::class, 'store'])->name('course.store');

Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');

Route::put('/courses/{course}', [CourseController::class, 'update'])->name('course.update');

Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');

Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.show');


// =======================
// computer
// =======================

Route::get('/computers', [ComputerController::class, 'index'])->name('computers.index');

Route::get('/computers/create', [ComputerController::class, 'create'])->name('computers.create');

Route::post('/computers', [ComputerController::class, 'store'])->name('computers.store');

Route::get('/computers/{computer}/edit', [ComputerController::class, 'edit'])->name('computers.edit');

Route::put('/computers/{computer}', [ComputerController::class, 'update'])->name('computers.update');

Route::delete('/computers/{computer}', [ComputerController::class, 'destroy'])->name('computers.destroy');


// =======================
// apprentices
// =======================

Route::get('/apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');

Route::get('/apprentices/create', [ApprenticeController::class, 'create'])->name('apprentices.create');

Route::post('/apprentices', [ApprenticeController::class, 'store'])->name('apprentices.store');

Route::get('/apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentices.show');

Route::get('/apprentices/{apprentice}/edit', [ApprenticeController::class, 'edit'])->name('apprentices.edit');

Route::put('/apprentices/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentices.update');

Route::delete('/apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentices.destroy');
=======

// =======================
// training_centers 
// =======================


Route::get('/training_centers', [TrainingCenterController::class, 'index'])->name('training_centers.index');

Route::delete('/training_centers/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training_centers.destroy');

>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
