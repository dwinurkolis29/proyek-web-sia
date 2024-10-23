@extends('adminlte::page')

@section('title', 'Data Pinjaman')

@section('content')
<h1>Data Pinjaman</h1>
<a href="{{ route('pinjaman.create') }}" class="btn btn-primary">Transaksi Pinjam</a>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Anggota</th>
            <th>Jenis Pinjaman</th>
            <th>Jumlah Pinjaman</th>
            <th>Jumlah Angsuran</th>
            <th>Per Angsuran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjaman as $pinjam)
        <tr>
            <td>{{ $pinjam->id_pinjaman }}</td>
            <td>{{ $pinjam->anggota->nama }}</td>
            <td>{{ $pinjam->jenisPinjam->jenis_pinjaman }}</td>
            <td>{{ $pinjam->besar_pinjaman }}</td>
            <td>{{ $pinjam->diangsur_kali }}</td>
            <td>{{ $pinjam->besar_angsuran }}</td>
            <td>{{ $pinjam->status == 1 ? 'Lunas' : 'Belum Lunas' }}</td>
            <td>
                <a href="{{ route('pinjaman.edit', $pinjam->id_pinjaman) }}" class="btn btn-warning">Transaksi Angsuran</a>
                <form action="{{ route('pinjaman.destroy', $pinjam->id_pinjaman) }}" method="POST" style="display:inline-block;">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection