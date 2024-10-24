@extends('adminlte::page')

@section('title', 'Edit Simpanan')

@section('content_header')
    <h1>Edit Simpanan</h1>
@endsection

@section('content')
    <form action="{{ route('simpanan.update', $simpanan->id_simpanan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Simpanan:</label>
            <input type="text" name="nama_simpanan" value="{{ $simpanan->nama_simpanan }}" class="form-control" required>
        </div>
        <label for="anggota" class="control-label">Nama Anggota</label><br>
        <select class="form-control" name="id_anggota">
            <option value="{{ $simpanan->id_anggota }}" selected>{{$simpanan->anggota->nama}}</option>
            @foreach ($anggota as $a)
            <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" value="{{ $simpanan->tanggal }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Besar Simpanan:</label>
            <input type="text" name="besar_simpanan" value="{{ $simpanan->besar_simpanan }}" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{ route('simpanan.index') }}"
                class="btn btn-default">Kembali</a>
        </div>
    </form>
@endsection
