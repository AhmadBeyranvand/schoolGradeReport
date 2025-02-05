<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->middleware("guest");

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [UserController::class,'showDashboard'])->name('dashboard');
    Route::get('/gradeReportView', [UserController::class,'showGradeReport'])->name('grade_report_view');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get("/", [AdminController::class, 'showDashboard'])->name('admin_dashboard');
    Route::prefix("/semester")->group( function(){
        Route::get("/new", [AdminController::class, 'showNewSemester'])->name('new_semester_grade');
        Route::get("/gradesInput", [AdminController::class, 'showGradesInput'])->name('grades_input');
        Route::post("/submitGrades", [GradeController::class, 'submitGrades'])->name('submit_grades');
    });
    Route::prefix("/api")->group(function (){
        Route::post("/getCourses/{id}", [CourseController::class,'coursesOfClassroom']);
    });
});



require __DIR__ . '/auth.php';
