@extends('adminlte::page')

@section('title', 'Tambah Jenis Pinjaman')

@section('content_header')
    <h1>Tambah Jenis Pinjaman</h1>
@endsection

@section('content')
    <form action="{{ route('jenis-pinjaman.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Jenis Pinjaman:</label>
            <input type="text" name="jenis_pinjaman" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Bunga (%):</label>
            <input type="number" name="bunga" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Maks Angsuran:</label>
            <input type="number" name="maks_angsuran" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('jenis-pinjaman.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
