<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Kota;
use App\models\Propinsi;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = Kota::orderBy('id', 'ASC')->paginate(5);
        return view('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propinsi = Propinsi::all(); 

        return view('kota.create', compact('propinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_propinsi' => 'required',
            'nama_kota'   => 'required'
        ]);

        Kota::create([
            'id_propinsi'   => $request->id_propinsi,
            'nama_kota'     => $request->nama_kota
        ]);

        return redirect()->route('kota.index')
            ->with('message', 'Kota baru berhasil ditambahkan!');
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
        $kota = Kota::with('propinsi')->findOrFail($id);
        $propinsi = Propinsi::where('id', '!=', $kota->id_propinsi)->get();
        return view('kota.edit', compact('kota', 'propinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_propinsi' => 'required',
            'nama_kota' => 'required'
        ]);

        Kota::findOrFail($id)
            ->update([
                'id_propinsi'   => $request->id_propinsi,
                'nama_kota'     => $request->nama_kota
            ]);

        return redirect()->route('kota.index')
            ->with('message', 'Kota baru berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Kota::find($id);
        $model->delete();
        return redirect()->route('kota.index')
            ->with('message', 'Kota baru berhasil dihapus....!');
    }
}
