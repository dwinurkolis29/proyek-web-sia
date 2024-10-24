@extends('adminlte::page')

@section('title', 'Daftar Simpanan')

@section('content_header')
    <h1>Daftar Simpanan</h1>
@endsection

@section('content')
    <a href="{{ route('simpanan.create') }}" class="btn btn-primary mb-3">Tambah Simpanan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    @if ($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Simpanan</th>
                <th>Nama Simpanan</th>
                <th>Nama Anggota</th>
                <th>Tanggal</th>
                <th>Besar Simpanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($simpanans as $simpanan)
                <tr>
                    <td>{{ $simpanan->id_simpanan }}</td>
                    <td>{{ $simpanan->nama_simpanan }}</td>
                    <td>{{ $simpanan->anggota->nama }}</td>
                    <td>{{ $simpanan->tanggal }}</td>
                    <td>{{ $simpanan->besar_simpanan }}</td>
                    <td>
                        <a href="{{ route('simpanan.edit', $simpanan->id_simpanan) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('simpanan.destroy', $simpanan->id_simpanan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
