<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Area;
=======
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
use App\Models\Course;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $areas =  Area::all();
        return view('user.index', compact('areas'));
=======
        $courses =  Course::all();
        return view('user.index', compact('courses'));
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
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

<<<<<<< HEAD
        \App\Models\Area::create([
            'id' => $request->id,
            'name' => $request->id,
          
        ]);
        return redirect()->route('user.index')->with('success', 'Curso creado correctamente');
    }
 
    public function edit(Area $area)
{
    return view('user.edit', compact('area'));
}

public function update(Request $request, Area $area)
{
    $request->validate([
        'id' => 'required|string|max:255',
        'name' => 'required|string|max:255',
    ]);

    $area->update([
        'id' => $request->id,
        'name' => $request->name,
=======
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
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
    ]);

    return redirect()->route('user.index')->with('success', 'Curso actualizado correctamente.');
}

<<<<<<< HEAD
   public function destroy(Area $area)
    {
        $area->delete();
       return redirect()->route('user.index')->with('success', 'El curso se eliminó exitosamente.');
=======
   public function destroy(Course $course)
    {
        $course->delete();
       return redirect()->route('user.index')->with('success', 'El curso se eliminó exitosamente.');

>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
    }

}
