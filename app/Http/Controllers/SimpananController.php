<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Anggota;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $simpanans = Simpanan::all();
        return view('simpanan.index', compact('simpanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = Anggota::all();
        return view('simpanan.create', compact('anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_simpanan' => 'required',
            'id_anggota' => 'required|integer',
            'tanggal' => 'required|date',
            'besar_simpanan' => 'required|numeric',
        ]);

        Simpanan::create($request->all());

        return redirect()->route('simpanan.index')
                         ->with('success', 'Simpanan berhasil ditambahkan.');
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
        $simpanan = Simpanan::with('anggota')->findOrFail($id);
        $anggota = Anggota::where('id_anggota', '!=', $simpanan->id_anggota)->get();
        return view('simpanan.edit', compact('simpanan', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_simpanan' => 'required',
            'id_anggota' => 'required|integer',
            'tanggal' => 'required|date',
            'besar_simpanan' => 'required|numeric',
        ]);

        $simpanan = Simpanan::findOrFail($id);
        $simpanan->update($request->all());

        return redirect()->route('simpanan.index')
                         ->with('message', 'Simpanan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Simpanan::find($id);
        $model->delete();
        return redirect()->route('simpanan.index')
            ->with('message', 'Simpanan baru berhasil dihapus....!');
    }
}
