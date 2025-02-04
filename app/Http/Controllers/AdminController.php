<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function __construct() {
    }
    public function showDashboard()
    {
        return view('admin.dashboard');
    }
    
    public function showNewSemester()
    {
        $classrooms = Classroom::orderBy('level')->get();
        $date = \Morilog\Jalali\Jalalian::now();
        return view('admin.newgrade.semester_class_select', ["year" => $date->getYear(), 'classrooms' => $classrooms]);
    }
    public function showGradesInput(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'classroom_id'=>['required', 'exists:classrooms,id'],
            'semester_year' => ['required','numeric', 'min:1400','max:1450']
        ]);
        if($validation->fails()){
            return redirect(route('new_semester_grade'))->withErrors($validation->errors());
        }
        return view('admin.newgrade.grade_input', []);

    }
}
