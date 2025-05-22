<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $courses =  Course::all();
        return view('user.index', compact('courses'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        \App\Models\Course::create([
            'course_number' => $request->course_number,
            'day' => $request->day,
            'area_id' => $request->area_id,
            'training_center_id' => $request->training_center_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Curso creado correctamente');
    }
 
    public function edit(Course $course)
{
    return view('user.edit', compact('course'));
}

public function update(Request $request, Course $course)
{
    $request->validate([
        'course_number' => 'required|string|max:255',
        'day' => 'required|string|max:255',
    ]);

    $course->update([
        'course_number' => $request->course_number,
        'day' => $request->day,
    ]);

    return redirect()->route('user.index')->with('success', 'Curso actualizado correctamente.');
}

   public function destroy(Course $course)
    {
        $course->delete();
       return redirect()->route('user.index')->with('success', 'El curso se eliminó exitosamente.');

    }

}
