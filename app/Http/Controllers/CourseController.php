<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Grade;
use DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function coursesOfClassroom($id)
    {
        $data = Classroom::where('id', $id)->get(['title', 'field_id', 'level'])[0];
        $courses = Course::where("field_id", $data['field_id'])
            ->where("level", $data['level'])
            ->get(['id', 'title']);
        return $courses;
    }

    public function getAvergaeOfCourses()
    {
        $data =[
            'titles' => [],
            'values' => []
        ];
        $lastYear = Grade::orderBy('year', 'desc')->first()->year;
        $lastSemester = Grade::orderBy('semester', 'desc')->first()->semester;
        $averageGrade = DB::table('grades as g')
            ->select(DB::raw('avg(amount) as avg'), 'c.title')
            ->join('courses as c', 'g.course_id', '=', 'c.id')
            ->where('amount', '<>', 0)
            ->where('year', $lastYear)
            ->where('semester', $lastSemester)
            ->groupBy('course_id')
            ->get();
        foreach($averageGrade as $item){
            array_push($data['titles'], $item->title);
            array_push($data['values'], floatval($item->avg));
        }
        return $data;
        
    }
}
