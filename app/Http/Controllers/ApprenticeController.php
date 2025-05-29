<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $aprendices = Apprentice::all();
        return view('apprentices.index', compact('aprendices'));
    }


    public function create()
    {
        $aprendices = Apprentice::all();
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentices.create', compact('aprendices', 'courses', 'computers'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id'

        ]);


        Apprentice::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell_number' => $request->cell_number,
            'course_id' => $request->course_id,
            'computer_id' => $request->computer_id
        ]);

        return redirect()->route('apprentices.index')->with('success', 'Curso sea creado correctamente');
    }


    public function show(Apprentice $apprentice)
    {
       $apprentice->load(['course', 'computer']);// Carga las relaciones
        return view('apprentices.show', compact('apprentice'));
    }


    public function edit(Apprentice $apprentice)
    {
        return view('apprentices.edit', compact('apprentice'));
    }


    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'cell_number' => 'required|string|max:255',
        ]);

        $apprentice->update([
            'name' => $request->name,
            'email' => $request->email,
            'cell_number' => $request->cell_number,
        ]);

        return redirect()->route('apprentices.index')->with('success', 'Aprendiz actualizado correctamente.');
    }


    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentices.index')->with('success', 'Aprendiz eliminado correctamente.');
    }
}
