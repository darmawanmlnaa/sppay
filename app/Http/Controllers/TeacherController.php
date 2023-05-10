<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index', ['title' => 'Petugas']);
    }
}
