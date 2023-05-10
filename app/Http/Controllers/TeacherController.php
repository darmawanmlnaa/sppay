<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// try use dataTables not both of this work, so i use cdn
// use DataTables;
// use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index', ['title' => 'Petugas']);
    }
}
