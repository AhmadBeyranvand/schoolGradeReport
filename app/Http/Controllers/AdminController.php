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
        $classrooms = Classroom::all();
        $date = \Morilog\Jalali\Jalalian::now();
        return view('admin.newgrade.semester_class_select', ["year" => $date->getYear(), 'classrooms' => $classrooms]);
    }
    public function showGradesInput(){
        return view('admin.newgrade.grade_input', []);
        
    }
}
