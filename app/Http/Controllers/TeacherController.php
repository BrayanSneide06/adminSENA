<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $area = Area::all();
        return view('teacher.index', compact('teachers', 'area'));
    }
<<<<<<< HEAD
    public function create()
    {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        return view('teacher.create', compact('areas', 'trainingCenters'));
    }
=======


    public function create()
    {
       
    $areas = Area::all();
     $trainingCenters = TrainingCenter::all(); 
    return view('teacher.create', compact('areas', 'trainingCenters'));
    }


>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
<<<<<<< HEAD
            'training_center_id' => 'required|exists:training_centers,id',
=======
            'training_center_id' => 'required|exists:training_centers,id', 
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
        ]);

        \App\Models\Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'area_id' => $request->area_id,
<<<<<<< HEAD
            'training_center_id' => $request->training_center_id,
=======
             'training_center_id' => $request->training_center_id,
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
        ]);

        return redirect()->route('teacher.index')->with('success', 'Teacher creado correctamente');
    }


    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('teacher.index')->with('success', 'curso actualizado correctamente');
    }

    public function destroy(Teacher  $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with('success', 'El teacher se elimino correctamente.');
    }
}
