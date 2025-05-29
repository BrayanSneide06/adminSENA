<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
<<<<<<< HEAD
    public function index()
    {

        $training_centers = TrainingCenter::all();
        return view('training_centers.index', compact('training_centers'));
    }

    public function create()
    {
        return view('training_centers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        \App\Models\TrainingCenter::create([
            'name' => $request->name,
        ]);

        return redirect()->route('training_centers.index')->with('succes', 'Centro creado');
    }


    public function edit(TrainingCenter $training_center)
    {
        return view('training_centers.edit', compact('training_center'));
    }

    public function update(Request $request, TrainingCenter $training_center)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $training_center->update([
            'name' => $request->name,
        ]);

        return redirect()->route('training_centers.index')->with('success', 'Centro actualizado correctamente');
    }



    public function destroy(TrainingCenter $training_center)
    {
=======
    public function index(){

    $training_centers = TrainingCenter::all();
        return view('training_centers.index', compact('training_centers'));
    }


    public function destroy(TrainingCenter $training_center){
>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
        $training_center->delete();
        return redirect()->route('training_centers.index')->with('success', 'El curso se elimino exitosamente');
    }
}
<<<<<<< HEAD
=======


>>>>>>> acea4d86cc3a8a036946910efe8c410dbeccc27e
