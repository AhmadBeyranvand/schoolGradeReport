<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard');
    }
    public function showGradeReport()
    {
        return view('school.grade_report');
    }
}
