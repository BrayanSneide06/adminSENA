<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index(){

    $training_centers = TrainingCenter::all();
        return view('training_centers.index', compact('training_centers'));
    }


    public function destroy(TrainingCenter $training_center){
        $training_center->delete();
        return redirect()->route('training_centers.index')->with('success', 'El curso se elimino exitosamente');
    }
}


