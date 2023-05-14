<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Major;
use App\Models\Spp;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['title' => 'Murid'], compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $majors = Major::all();
        $spp = Spp::all();
        return view('student.create', ['title' => 'Tambah Murid'], compact(['grades', 'majors', 'spp']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => ['required', 'numeric'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students,email'],
            'grade_id' => ['required'],
            'major_id' => ['required'],
            'spp_id' => ['required'],
            'thumb' => ['nullable', 'mimes:jpg,png,jpeg'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->file('thumb')) {
            $thumbName = time().'.'.$request->thumb->extension();
            Student::create([
                'nis' => $request->nis,
                'name' => $request->name,
                'email' => $request->email,
                'grade_id' => $request->grade_id,
                'major_id' => $request->major_id,
                'spp_id' => $request->spp_id,
                'thumb' => $request->thumb->storeAs('student_thumbs', $thumbName),
                'password' => Hash::make($request->password),
            ]);
        } else {
            Student::create([
                'nis' => $request->nis,
                'name' => $request->name,
                'email' => $request->email,
                'grade_id' => $request->grade_id,
                'major_id' => $request->major_id,
                'spp_id' => $request->spp_id,
                'thumb' => $request->thumb,
                'password' => Hash::make($request->password),
            ]);
        }
        
        return redirect('/student')->with('success', 'Murid baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        $grades = Grade::all();
        $majors = Major::all();
        $spp = Spp::all();
        return view('student.edit', ['title' => 'Ubah data murid'], compact(['student', 'grades', 'majors', 'spp']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        $request->validate([
            'nis' => ['required', 'numeric'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'grade_id' => ['required'],
            'major_id' => ['required'],
            'spp_id' => ['required'],
            'thumb' => ['nullable', 'mimes:jpg,png,jpeg'],
        ]);

        if ($request->file('thumb')) {
            $thumbPath = public_path("storage/".$student->thumb);
            if (File::exists($thumbPath)) {
                File::delete($thumbPath);
            }
            $thumbName = time().'.'.$request->thumb->extension();
            Student::where('id', $id)->update([
                'nis' => $request->nis,
                'name' => $request->name,
                'email' => $request->email,
                'grade_id' => $request->grade_id,
                'major_id' => $request->major_id,
                'spp_id' => $request->spp_id,
                'thumb' => $request->thumb->storeAs('student_thumbs', $thumbName),
            ]);
        } else {
            Student::where('id', $id)->update([
                'nis' => $request->nis,
                'name' => $request->name,
                'email' => $request->email,
                'grade_id' => $request->grade_id,
                'major_id' => $request->major_id,
                'spp_id' => $request->spp_id,
                'thumb' => $request->thumb,
            ]);
        }
        
        return redirect('/student')->with('success', 'Murid berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if ($student->thumb) {
            Storage::delete($student->thumb);
        }

        $student->delete();

        return redirect('/student')->with('success', 'Murid Berhasil Dihapus!');
    }
}
