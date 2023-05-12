<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('dashboard', compact(['admins', 'teachers']));
    }
}
