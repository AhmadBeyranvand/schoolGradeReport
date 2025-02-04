<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\User;
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
            'semester_part'=>['required','numeric','between:1,3'],
            'semester_year' => ['required','numeric', 'min:1400','max:1450']
        ]);
        if($validation->fails()){
            return redirect(route('new_semester_grade'))->withErrors($validation->errors());
        }
        $classroomID = $request->get('classroom_id');
        $data = [];
        $data['level'] = Classroom::find($classroomID)->level;
        $data['courses'] = Course::where('level',$data['level'])->get(['id','title']);
        $data['students'] = User::where([
            ['isAdmin',false],
            ['classroom_id', $classroomID]
        ])->get();
        // return $data;
        return view('admin.newgrade.grade_input', $data);

    }
}
