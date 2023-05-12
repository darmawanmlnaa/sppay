<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MajorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    // teacher
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::put('/teacher/edit/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/destroy/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

    // admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::middleware(['auth'])->group(function () {
    // grade
    Route::get('/grade', [GradeController::class, 'index'])->name('grade');
    Route::get('/grade/create', [GradeController::class, 'create'])->name('grade.create');
    Route::post('/grade/store', [GradeController::class, 'store'])->name('grade.store');
    Route::get('/grade/edit/{id}', [GradeController::class, 'edit'])->name('grade.edit');
    Route::put('/grade/edit/{id}', [GradeController::class, 'update'])->name('grade.update');
    Route::delete('/grade/destroy/{id}', [GradeController::class, 'destroy'])->name('grade.destroy');

    // major
    Route::get('/major', [MajorController::class, 'index'])->name('major');
    Route::get('/major/create', [MajorController::class, 'create'])->name('major.create');
    Route::post('/major/store', [MajorController::class, 'store'])->name('major.store');
    Route::get('/major/edit/{id}', [MajorController::class, 'edit'])->name('major.edit');
    Route::put('/major/edit/{id}', [MajorController::class, 'update'])->name('major.update');
    Route::delete('/major/destroy/{id}', [MajorController::class, 'destroy'])->name('major.destroy');
});

require __DIR__.'/auth.php';
