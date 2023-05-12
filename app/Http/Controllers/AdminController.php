<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        return view('admin.index', ['title' => 'Admin'], compact(['admins']));
    }

    public function create()
    {
        return view('admin.create', ['title' => 'Registrasi Admin']);
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
                'thumb' => $request->thumb->storeAs('teacher_thumbs', $thumbName),
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

        return redirect('/admin')->with('success', 'Admin Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.edit', ['title' => 'Ubah data admin'], compact(['admin']));
    }

    public function update(Request $request, $id)
    {
        $admin = User::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'thumb' => ['nullable', 'mimes:jpg,png,jpeg'],
        ]);

        if ($request->file('thumb')) {
            $thumbPath = public_path("storage/".$admin->thumb);
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
        return redirect('/admin')->with('success', 'Data Admin Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $admin = User::find($id);

        if ($admin->thumb) {
            Storage::delete($admin->thumb);
        }

        $admin->delete();

        return redirect('/admin')->with('success', 'Admin Berhasil Dihapus!');
    }
}
