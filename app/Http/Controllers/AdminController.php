<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }

    public function showNewSemester()
    {
        $date = \Morilog\Jalali\Jalalian::now();
        return view('admin.newgrade.semester_class_select', ["year" => $date->getYear()]);
    }
    public function showGradesInput(){
        $classrooms = Classroom::all();
        return view('admin.newgrade.grade_input', ['classrooms' => $classrooms]);
        
    }
}
