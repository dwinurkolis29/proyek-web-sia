@extends('adminlte::page')

@section('title', 'Daftar Jenis Pinjaman')

@section('content_header')
    <h1>Daftar Jenis Pinjaman</h1>
@endsection

@section('content')
    <a href="{{ route('jenis-pinjaman.create') }}" class="btn btn-primary mb-3">Tambah Jenis Pinjaman</a>
    
    @if ($message = Session::get('message'))
            <div class="alert alert-success martop-sm">
                <p>{{ $message }}</p>
            </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Pinjaman</th>
                <th>Bunga</th>
                <th>Maks Angsuran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisPinjaman as $jenis)
                <tr>
                    <td>{{ $jenis->id_jenis }}</td>
                    <td>{{ $jenis->jenis_pinjaman }}</td>
                    <td>{{ $jenis->bunga }}%</td>
                    <td>{{ $jenis->maks_angsuran }} kali</td>
                    <td>
                        <a href="{{ route('jenis-pinjaman.edit', $jenis->id_jenis) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis-pinjaman.destroy', $jenis->id_jenis) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
