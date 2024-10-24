<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPinjaman;

class JenisPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisPinjaman = JenisPinjaman::all();
        return view('jenis_pinjaman.index', compact('jenisPinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_pinjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_pinjaman' => 'required',
            'bunga' => 'required|numeric',
            'maks_angsuran' => 'required|integer',
        ]);

        JenisPinjaman::create($request->all());

        return redirect()->route('jenis-pinjaman.index')
                         ->with('message', 'Jenis pinjaman berhasil ditambahkan.');
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
        $jenisPinjaman = JenisPinjaman::findOrFail($id);
        return view('jenis_pinjaman.edit', compact('jenisPinjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis_pinjaman' => 'required',
            'bunga' => 'required|numeric',
            'maks_angsuran' => 'required|integer',
        ]);

        $jenisPinjaman = JenisPinjaman::find($id);
        $jenisPinjaman->update($request->all());

        return redirect()->route('jenis-pinjaman.index')
                         ->with('success', 'Jenis pinjaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = JenisPinjaman::find($id);
        $model->delete();

        return redirect()->route('jenis-pinjaman.index')->with('message', 'jenis pinjaman Berhasil dihapus...!');
    }
}
