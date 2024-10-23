<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angsuran;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $angsuran = Angsuran::all();

        // Menjumlahkan angsuran yang sudah dibayar (tanggal_pembayaran tidak null)
        $total_angsuran_bayar = Angsuran::whereNotNull('tanggal_pembayaran')->sum('besar_angsuran');
        $diangsur = Angsuran::whereNotNull('tanggal_pembayaran')->count();
        return view('angsuran.index', compact('angsuran', 'total_angsuran_bayar', 'diangsur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $angsuran = Angsuran::findOrFail($id);
        return view('angsuran.edit', compact('angsuran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);


        $angsuran = Angsuran::findOrFail($id)
            ->update($request->all());
        return redirect()->route('angsuran.index')
            ->with('message', 'Transaksi angsuran berhasil dilakukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
