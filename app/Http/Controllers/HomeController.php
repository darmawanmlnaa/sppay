<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grade;
use App\Models\Major;
use App\Models\Spp;
use App\Models\Student;

class HomeController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        $teachers = User::where('role', 'teacher')->get();
        $grades = Grade::all();
        $majors = Major::all();
        $spp = Spp::all();
        $students = Student::all();
        return view('dashboard', compact(['admins', 'teachers', 'grades', 'majors', 'spp', 'students']));
    }
}
