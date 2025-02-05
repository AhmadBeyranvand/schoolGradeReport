<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function coursesOfClassroom($id){
        $data = Classroom::where('id',$id)->get(['title','field_id','level'])[0];
        $courses = Course::where("field_id", $data['field_id'])
                         ->where("level", $data['level'])
                         ->get(['id','title']);
        return $courses;
    }
}
