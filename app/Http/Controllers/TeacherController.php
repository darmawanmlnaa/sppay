<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

// try use dataTables not both of this work, so i use cdn
// use DataTables;
// use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('teacher.index', ['title' => 'Petugas'], compact(['teachers']));
    }

    public function create()
    {
        return view('teacher.create', ['title' => 'Registrasi Petugas']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'thumb' => ['nullable', 'mimes:jpg,png,jpeg'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->file('thumb')) {
            // $thumbName = $request->file('thumb')->getClientOriginalName();
            $thumbName = time().'.'.$request->thumb->extension();
            User::create([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'thumb' => $request->thumb->storeAs('thumbs', $thumbName),
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::create([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'thumb' => $request->thumb,
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect('/teacher')->with('success', 'Petugas berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $teacher = User::find($id);
        return view('teacher.edit', ['title' => 'Ubah data petugas'], compact(['teacher']));
    }

    public function update(Request $request, string $id)
    {
        $teacher = User::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'thumb' => ['nullable', 'mimes:jpg,png,jpeg'],
        ]);

        if ($request->file('thumb')) {
            $thumbPath = public_path("storage/".$teacher->thumb);
            if (File::exists($thumbPath)) {
                File::delete($thumbPath);
            }
            $thumbName = time().'.'.$request->thumb->extension();
            User::where('id', $id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'thumb' => $request->thumb->storeAs('thumbs', $thumbName),
            ]);
        } else {
            User::where('id', $id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
            ]);
        }
        return redirect('/teacher')->with('success', 'Data Petugas Berhasil Diubah!');
    }

    public function destroy(string $id)
    {
        $teacher = User::find($id);

        if ($teacher->thumb) {
            Storage::delete($teacher->thumb);
        }

        $teacher->delete();

        return redirect('/teacher')->with('success', 'Petugas Berhasil Dihapus!');
    }
}
