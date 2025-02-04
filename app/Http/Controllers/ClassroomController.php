<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function showStudents($classroom_id)
    {
        return User::where(["isAdmin" => false, "classroom_id"=> $classroom_id])->get();
    }
}
