<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {

        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        $computers = Computer::all();
        return view('computers.create', compact('computers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);

        Computer::create([
            'number' => $request->number,
            'brand' => $request->brand,
        ]);

        return redirect()->route('computers.index')->with('success', 'Computers sea creado correctamente');
    }


    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }


    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
        ]);

        $computer->update([
            'number' => $request->number,
            'brand' => $request->brand,
        ]);
        return redirect()->route('computers.index')->with('success', 'El computador se actualizó correctamente.');
    }


    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computers.index')->with('success', 'El computador sea eliminado correctamente.');
    }
}
