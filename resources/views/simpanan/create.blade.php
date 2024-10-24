@extends('adminlte::page')

@section('title', 'Tambah Simpanan')

@section('content_header')
    <h1>Tambah Simpanan</h1>
@endsection

@section('content')
    <form action="{{ route('simpanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Simpanan:</label>
            <input type="text" name="nama_simpanan" class="form-control" placeholder="nama simpanan" required>
        </div>
        <div class="form-group">
            <label for="anggota" class="control-label">Nama Anggota</label><br>
            <select class="form-control" name="id_anggota">
                <option value="">--pilihan--</option>
                @foreach ($anggota as $a)
                <option value="{{$a->id_anggota}}">{{ $a->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Besar Simpanan:</label>
            <input type="number" name="besar_simpanan" class="form-control" placeholder="besar simpanan" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('simpanan.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
