<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id_anggota', 'ASC')->paginate(7);
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email|unique:anggota'
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('message', 'Anggota baru berhasil ditambahkan.');
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
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_anggota)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'no_telepon' => 'required',

            'email' => 'required|email|unique:anggota,email,' . $id_anggota . ',id_anggota',
        ]);

        Anggota::findOrFail($id_anggota)->update($request->all());

        return redirect()->route('anggota.index')
            ->with('message', 'Anggota berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Anggota::find($id);
        $model->delete();

        return redirect()->route('anggota.index')->with('message', 'Anggota baru Berhasil dihapus...!');
    }
}
