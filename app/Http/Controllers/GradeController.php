<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Validator;

class GradeController extends Controller
{
    protected $adminController;
    public function __construct(AdminController $adminController)
    {
        $this->adminController = $adminController;
    }
    public function submitGrades(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'classroom_id' => ['required', 'exists:classrooms,id'],
            'semester_part' => ['required', 'numeric', 'between:1,3'],
            'semester_year' => ['required', 'numeric', 'min:1400', 'max:1450'],
            'course_id' => ['required', 'numeric', 'exists:courses,id']
        ]);
        if ($validation->fails()) {
            return redirect(route('grades_input'))->withInput()->withErrors($validation->errors());
        }
        $studentGrades = $request->get('student');
        $year = intval($request->get('semester_year'));
        $semester = intval($request->get('semester_part'));
        $course_id = intval($request->get('course_id'));
        $classroom_id = intval($request->get('classroom_id'));
        foreach ($studentGrades as $student_id => $amount) {
            $searchGrade = Grade::where("student_id", $student_id)
                ->where("course_id", $course_id)
                ->where("semester", $semester)
                ->where("year", $year)
            ;
            if (!$searchGrade->exists()) {
                $grade = new Grade();
                $grade->student_id = intval($student_id);
                $grade->course_id = $course_id;
                $grade->amount = floatval($amount);
                $grade->semester = $semester;
                $grade->year = $year;
                $grade->user_submitted_id = auth()->id();
                $grade->saveOrFail();
            } else {
                // $grade_id = $oldGrade->get('id');
                $oldGrade = $searchGrade->first();
                $oldGrade->user_submitted_id = auth()->id();
                $oldGrade->amount = floatval($amount);
                $oldGrade->save();
            }
        }
        return redirect(route('grades_input', [
            'course_id' => $course_id,
            'semester_year' => $year,
            'semester_part' => $semester,
            'classroom_id' => $classroom_id,
        ]))
            ->with("status", __('Scores were successfully recorded!'));
    }

    public function getStudentAndAverageGrades()
    {
        $data = [
            'labels' => [],
            'studentGrades' => [],
            'averageGrades' => []
        ];
        $gradeItem = Grade::where('student_id', auth()->id());
        if (!$gradeItem->exists()) {
            return redirect(route('dashboard'))->with('error', __("No grades have yet been made for you!"));
        }
        $lastYear = $gradeItem->orderBy('year', 'desc')->first()->year;
        $lastSemester = $gradeItem->orderBy('semester', 'desc')->first()->semester;

        $grades = Grade::where('student_id', auth()->id())
            ->where('amount', '<>', '0')
            ->where('year', $lastYear)
            ->where('semester', $lastSemester)
            ->get(['course_id', 'amount']);

        foreach ($grades as $key => $grade) {
            $course_title = Course::find($grade->course_id)->title;
            $averageGrade = Grade::where('course_id', $grade->course_id)
                ->where('amount', '<>', '0')
                ->avg('amount');
            array_push($data['labels'], $course_title);
            array_push($data['studentGrades'], floatval($grade->amount));
            array_push($data['averageGrades'], floatval($averageGrade));
        }

        return $data;
    }
}
