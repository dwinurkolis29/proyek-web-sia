@extends('adminlte::page')

@section('title', 'Edit Jenis Pinjaman')

@section('content_header')
    <h1>Edit Jenis Pinjaman</h1>
@endsection

@section('content')
    <form action="{{ route('jenis-pinjaman.update', $jenisPinjaman->id_jenis) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Jenis Pinjaman:</label>
            <input type="text" name="jenis_pinjaman" value="{{ $jenisPinjaman->jenis_pinjaman }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Bunga (%):</label>
            <input type="text" name="bunga" value="{{ $jenisPinjaman->bunga }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Maks Angsuran:</label>
            <input type="text" name="maks_angsuran" value="{{ $jenisPinjaman->maks_angsuran }}" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('jenis-pinjaman.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
