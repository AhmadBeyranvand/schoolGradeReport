<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
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

Route::prefix('/admin')->group(function () {
    Route::get("/uu", [ProfileController::class, 'uu']);

})->middleware(IsAdmin::class);



require __DIR__ . '/auth.php';
