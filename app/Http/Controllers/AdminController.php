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
        $classrooms = Classroom::all();
        return view('admin.newgrade.semester_class_select', ["year" => $date->getYear(), 'classrooms' => $classrooms]);
    }
}
