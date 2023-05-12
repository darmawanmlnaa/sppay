<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::all();
        return view('major.index', ['title' => 'Jurusan'], compact(['majors']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('major.create', ['title' => 'Tambah Jurusan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'major' => ['required', 'max:100', 'unique:majors,major'],
        ]);

        Major::create([
            'major' => $request->major,
        ]);

        return redirect('/major')->with('success', 'Jurusan berhasil ditambahkan!');
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
        $major = Major::find($id);
        return view('major.edit', ['title' => 'Edit Jurusan'], compact(['major']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'major' => ['required', 'max:100', 'unique:majors,major'],
        ]);

        Major::where('id', $id)->update([
            'major' => $request->major,
        ]);

        return redirect('/major')->with('success', 'Jurusan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $major = Major::find($id);
        $major->delete();
        return redirect('/major')->with('success', 'Jurusan berhasil dihapus!');
    }
}
