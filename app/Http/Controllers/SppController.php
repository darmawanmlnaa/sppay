<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = Spp::all();
        return view('spp.index', ['title' => 'Spp'], compact(['spp']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create', ['title' => 'Tambah Spp']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => ['required', 'numeric'],
            'amount' => ['required', 'numeric'],
        ]);

        Spp::create([
            'year' => $request->year,
            'amount' => $request->amount,
        ]);

        return redirect('/spp')->with('success', 'Spp berhasil ditambahkan!');
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
        $spp = Spp::find($id);
        return view('spp.edit', ['title' => 'Ubah Spp'], compact(['spp']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'year' => ['required', 'numeric'],
            'amount' => ['required', 'numeric'],
        ]);

        Spp::where('id', $id)->update([
            'year' => $request->year,
            'amount' => $request->amount,
        ]);

        return redirect('/spp')->with('success', 'Spp berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('/spp')->with('success', 'Spp berhasil dihapus!');
    }
}
