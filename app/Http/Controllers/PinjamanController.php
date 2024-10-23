<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\Anggota;
use App\Models\JenisPinjaman;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjaman = Pinjaman::all();
        return view('pinjaman.index', compact('pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = Anggota::all();
        $jenis_pinjaman = JenisPinjaman::all();
        return view('pinjaman.create', compact('anggota', 'jenis_pinjaman') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required',
            'besar_pinjaman' => 'required',
            'diangsur_kali' => 'required',
            'id_jenis_pinjaman' => 'required',
            'besar_pokok_pinjaman' => 'required',
            'besar_angsuran' => 'required',
            'tanggal_pengajuan' => 'required|date',
            'tanggal_acc' => 'required|date',
            'tanggal_jatuh_tempo' => 'required|date',
            'keterangan' => 'required',
        ]);

        Pinjaman::create($request->all());
        return redirect()->route('pinjaman.index')->with('message', 'Transaksi pinjaman berhasil ditambahkan.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
