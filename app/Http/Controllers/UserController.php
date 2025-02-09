<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class UserController extends Controller
{
    private function replaceNumbersWithWords($input)
    {
        $replace = array(

            7 => 'هفتم',
            8 => 'هشتم',
            9 => 'نهم',
            10 => 'دهم',
            11 => 'یازدهم',
            12 => 'دوازدهم',
        );
        return str_replace(array_keys($replace), array_values($replace), $input);
    }
    public function showDashboard()
    {
        $gradeOfStudent = Grade::where("student_id", auth()->id());
        $noData = $gradeOfStudent->count() > 0 ? false : true;
        if (!$noData) {
            $gradeOfStudent = $gradeOfStudent
                ->where(
                    "year",
                    $gradeOfStudent->orderBy("year", "desc")->first()->year
                )
                ->where(
                    "semester",
                    $gradeOfStudent->orderByDesc("year")->orderByDesc("semester")->first()->semester
                );
        }
        $data = [
            'countOfCourses' => Course::where(
                'level',
                Classroom::find(auth()->user()->classroom_id)->level
            )
                ->where(
                    'field_id',
                    Classroom::find(auth()->user()->classroom_id)->field_id
                )
                ->count(),
            'countOfGrades' => $gradeOfStudent->count(),
            'numberOfAccepted' => $gradeOfStudent->where("amount", ">=", "10")->count(),
            // 'numberOfRejected' => $gradeOfStudent->where("amount", "<", "10")->where("amount", "<>", "0")->count(),
            'firstGradeTime' => $noData ? "بدون تاریخ" : Jalalian::forge($gradeOfStudent->orderByDesc("created_at")->first()->created_at)->format("%A, %d/%m/%Y"),
            'lastGradeTime' => $noData ? "بدون تاریخ" : Jalalian::forge($gradeOfStudent->orderBy("created_at")->first()->created_at)->format("%A, %d/%m/%Y")
        ];
        $data['numberOfRejected'] = intval($data['countOfGrades']) - intval($data['numberOfAccepted']);
        // return $data;
        return view('dashboard', $data);
    }
    public function showGradeReport()
    {
        $data = [];
        $userInfo = [];
        $gradeItem = Grade::where('student_id', auth()->id());
        if (!$gradeItem->exists()) {
            return redirect(route('dashboard'))->with('error', __("No grades have yet been made for you!"));
        }
        $lastYear = $gradeItem->orderBy('year', 'desc')->first()->year;
        $lastSemester = $gradeItem->orderBy('semester', 'desc')->first()->semester;

        $userInfo['year'] = $lastYear;
        $userInfo['level'] = $this->replaceNumbersWithWords(intval(Classroom::find(auth()->user()->classroom_id)->level));
        $userInfo['semester'] = $this->replaceNumbersWithWords($lastSemester);
        $grades = Grade::where('student_id', auth()->id())
            ->where('year', $lastYear)
            ->where('semester', $lastSemester)
            ->get(['course_id', 'amount', 'updated_at']);
        foreach ($grades as $key => $grade) {
            $course_title = Course::find($grade->course_id)->title;
            array_push($data, [
                'title' => $course_title,
                'amount' => floatval($grade->amount),
                'time' => Jalalian::forge($grade->updated_at)->format('%A, %d %B %Y')
            ]);
        }
        // return $data;
        return view('school.grade_report', ["grades" => $data, "userInfo" => $userInfo]);
    }

    public function rootPage(){
        if(auth()->check()){
            if(auth()->user()->isAdmin){
                return redirect(route('admin_dashboard'));
            }
            return redirect(route('dashboard'));
        } 
        return view('home');

    }
}
