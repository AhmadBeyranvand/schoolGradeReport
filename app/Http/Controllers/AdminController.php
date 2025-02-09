<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
    }
    public function showDashboard()
    {
        $noData = (Grade::all()->count() > 0) ? false : true;
        $data = [
            'countOfStudents' => User::where('isAdmin', false)->count(),
            'lastGradeTime' => $noData ? "بدون نمره" : Jalalian::forge(Grade::orderBy('created_at', 'desc')->first()->created_at)->format('%Y/%m/%d  H:i'),
            'numberOfRejected' => $noData ? "0" : Grade::where("amount", "<", "10")->where("amount", "<>", 0)->count()
        ];
        return view('admin.dashboard', $data);
    }
    public function showNewSemester()
    {
        $classrooms = Classroom::orderBy('level')->get();
        $date = Jalalian::now();
        return view('admin.newgrade.semester_class_select', ["year" => $date->getYear(), 'classrooms' => $classrooms]);
    }
    public function showGradesInput(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'classroom_id' => ['required', 'exists:classrooms,id'],
            'semester_part' => ['required', 'numeric', 'between:1,3'],
            'semester_year' => ['required', 'numeric', 'min:1400', 'max:1450'],
            'course_id' => ['required', 'numeric', 'exists:courses,id']
        ]);
        if ($validation->fails()) {
            return redirect(route('new_semester_grade'))->withErrors($validation->errors());
        }
        $classroomID = $request->get('classroom_id');
        $data = [];
        $data['course_id'] = $request->get('course_id');
        $data['semester_year'] = $request->get('semester_year');
        $data['classroom_id'] = $request->get('classroom_id');
        $data['semester_part'] = $request->get('semester_part');

        $data['level'] = Classroom::find($classroomID)->level;
        // $data['courses'] = Course::where('level',$data['level'])->get(['id','title']);
        $data['students'] = User::where([
            ['isAdmin', false],
            ['classroom_id', $classroomID]
        ])->get(['id', 'first_name', 'last_name', 'father_name', 'national_code', 'classroom_id']);
        foreach ($data['students'] as $st) {
            $st['grade'] = floatval(
                Grade::where("student_id", $st->id)
                    ->where("course_id", $data['course_id'])
                    ->where("semester", $data['semester_part'])
                    ->where("year", $data['semester_year'])
                    ->get(['amount'])[0]['amount'] ?? 0
            );
        }
        return view('admin.newgrade.grade_input', $data);

    }
    public function showStudentManager()
    {
        $students = User::where('isAdmin', false)->get();
        $classrooms = Classroom::all();
        return view("admin.studentManager.list", ['students' => $students, 'classrooms' => $classrooms]);
    }
    public function showStudentEdit($id)
    {
        $student = User::find($id);
        $classrooms = Classroom::all();
        return view("admin.studentManager.edit", ['user' => $student, 'classrooms' => $classrooms]);
    }
    public function showStudentGrades($id)
    {
        $validation = Validator::make(['id' => $id], [
            'id' => ['required', 'exists:users,id']
        ]);
        if ($validation->fails()) {
            return redirect(route('show_student_manager'))->withErrors($validation->errors());
        }
        $student = User::find($id);
        $data = [];
        $grades = Grade::where('student_id', $id)->orderBy('year', 'desc')->get();
        foreach ($grades as $key => $grade) {
            $course_title = Course::find($grade->course_id)->title;
            array_push($data, [
                'title' => $course_title,
                'amount' => floatval($grade->amount),
                'time' => Jalalian::forge($grade->updated_at)->format('%A, %d %B %Y'),
                'author' => User::find($grade->user_submitted_id)->name
            ]);
        }
        return view('admin.studentManager.grades', ['grades' => $data, 'student' => $student]);

    }
    public function updateStudent($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name" => ['required'],
            "last_name" => ['required'],
            "father_name" => ['required'],
            "national_code" => ['required'],
            "email" => ['required', 'email'],
            "phone" => ['required'],
            "password" => ['nullable', 'min:8'],
            "classroom_id" => ['required', 'exists:classrooms,id'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $student = User::findOrFail($id);

        $first_name = $request->get("first_name");
        $last_name = $request->get("last_name");
        $father_name = $request->get("father_name");
        $national_code = $request->get("national_code");
        $email = $request->get("email");
        $phone = $request->get("phone");
        $password = $request->get("password");
        $classroom_id = $request->get("classroom_id");

        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->father_name = $father_name;
        $student->national_code = $national_code;
        $student->email = $email;
        $student->phone = $phone;
        $student->classroom_id = $classroom_id;
        if (!empty($password)) {
            $student->password = $password;
        }
        if ($student->save()) {
            return redirect()->back()->with('status', __('profile updated'));
        }
        return redirect()->back()->with('error', 'خطا در هنگام بروزرسانی کاربر');
    }
}
