<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
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
            'course_id' => ['required', 'numeric', 'exists:courses,id'],
            // 'grade.*' => [ 'exists:users,id']
        ]);
        if ($validation->fails()) {
            return redirect(route('grades_input'))->withInput()->withErrors($validation->errors());
        }
        $grades = $request->get('student');
        $year = intval($request->get('semester_year'));
        $semester = intval($request->get('semester_part'));
        $course_id = intval($request->get('course_id'));
        foreach ($grades as $student_id => $amount) {
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
                $grade->saveOrFail();
            } else {
                // $grade_id = $oldGrade->get('id');
                $oldGrade = $searchGrade->first();
                $oldGrade->amount = floatval($amount);
                $oldGrade->save();
            }
        }
        return redirect(route('grades_input', $request))
        ->with("status",__("Scores were successfully recorded!"));
    }
}
