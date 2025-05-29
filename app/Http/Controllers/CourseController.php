<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Area;
use App\Models\Course;
use App\Models\TrainingCenter;
=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
use Illuminate\Http\Request;

class CourseController extends Controller
{
<<<<<<< HEAD
    // Mostrar todos los cursos
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    // Mostrar el formulario para crear un curso
    public function create()
    {
        $courses = Course::all();
        $areas = Area::all();
        $trainings_center_id = TrainingCenter::all();
        return view('course.create', compact('courses', 'areas', 'trainings_center_id'));
    }

    // Guardar un nuevo curso
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string|max:255',
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        Course::create([
            'course_number' => $request->course_number,
            'day' => $request->day,
            'area_id' => $request->area_id,
            'training_center_id' => $request->training_center_id,
        ]);

        return redirect()->route('course.index')->with('success', 'Curso creado correctamente');
    }

    // Mostrar un curso específico
    public function show(Course $course)
    {
        $course->load(['area', 'trainingCenter']);
        return view('course.show', compact('course'));
    }

    // Mostrar el formulario para editar un curso
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    // Actualizar un curso existente
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'id' => 'required|string|max:255',
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
        ]);

        $course->update([
            'course_number' => $request->course_number,
            'day' => $request->day,
        ]);

        return redirect()->route('course.index')->with('success', 'Curso actualizado correctamente');
    }

    // Eliminar un curso
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Curso eliminado correctamente');
    }
}

=======
    
}
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
