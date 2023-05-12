<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

// try use dataTables not both of this work, so i use cdn
// use DataTables;
// use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'teacher')->get();
        return view('teacher.index', ['title' => 'Petugas'], compact(['users']));
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

        if ($request->has('thumb')) {
            // $thumbName = $request->file('thumb')->getClientOriginalName();
            $thumbName = time().'.'.$request->thumb->extension();
            $user = User::create([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'thumb' => $request->thumb->storeAs('teacher_thumbs', $thumbName),
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'thumb' => $request->thumb,
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect('/teacher')->with('success', 'Petugas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user->thumb) {
            Storage::delete($user->thumb);
        }

        $user->delete();

        return redirect('/teacher')->with('success', 'Petugas Berhasil Dihapus!');
    }
}
