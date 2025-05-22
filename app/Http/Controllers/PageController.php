<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $course = Course::find(1);
        return $course->training_center;
    }
}
