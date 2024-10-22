@extends('adminlte::page')

@section('title', 'Data Angsuran')

@section('content')
<h1>Data Angsuran</h1>
<br>

@foreach ($angsuran as $item)
<p class="font-weight-bold" >No pinjaman              :  {{ $item->pinjaman->id_pinjaman }} </p> 
<p class="font-weight-bold" >Nama                     : {{ $item->anggota->nama }} </p>
<p class="font-weight-bold" >Nominal                  : {{ $item->pinjaman->besar_pokok_pinjaman }} </p>
<p class="font-weight-bold" >Jumlah sudah diangsur    : Rp {{ number_format($total_angsuran_bayar, 2, ',', '.') }} </p>
<p class="font-weight-bold" >Diangsur                 : {{ $diangsur }} kali </p>
<p class="font-weight-bold" >Jenis Pinjaman           : {{ $item->pinjaman->jenisPinjam->jenis_pinjaman }} </p>
@endforeach

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Angsuran ke</th>
            <th>Batas Pembayaran</th>
            <th>Jumlah Angsuran</th>
            <th>Tanggal Pembayaran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($angsuran as $item)
        <tr>
            <td>{{ $item->angsuran_ke }}</td>
            <td>{{ $item->tanggal_jatuh_tempo }}</td>
            <td>{{ $item->besar_angsuran }}</td>
            <td>{{ $item->tanggal_pembayaran ?? 'Belum dibayar' }}</td>
            <td>{{ $item->status == 0 ? 'Lunas' : 'Belum Lunas' }}</td>
            <td>
                <a href="{{ route('angsuran.edit', $item->id_angsuran) }}" class="btn btn-warning">Transaksi Angsuran</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection