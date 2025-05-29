<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas =  Area::all();
        return view('user.index', compact('areas'));
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
    ]);

    return redirect()->route('user.index')->with('success', 'Curso actualizado correctamente.');
}

   public function destroy(Area $area)
    {
        $area->delete();
       return redirect()->route('user.index')->with('success', 'El curso se eliminó exitosamente.');
    }

}
