@extends('adminlte::page')
@section('content')
<h4>Transaksi Pinajaman</h4>
<form action="{{ route('pinjaman.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('pinjaman') ?'has-error' : '' }}">

        <label for="anggota" class="control-label">Nama Anggota</label><br>
        <select class="form-control" name="id_anggota">
            @foreach ($anggota as $a)
            <option value="{{$a->id_anggota}}">{{ $a->nama }}</option>
            @endforeach
        </select>

        <label for="pinjaman" class="control-label">Besar Pinjaman (Rp)</label>
        <input type="number" class="form-control" name="besar_pinjaman" placeholder="besar pinjaman">
        
        <label for="pinjaman" class="control-label">Jumlah Angsuran x</label>
        <input type="number" class="form-control" name="diangsur_kali" placeholder="jumlah angsuran x">

        <label for="jenis_pinjaman" class="control-label">Jenis Pinjaman</label><br>
        <select class="form-control" name="id_jenis_pinjaman">
            <option value="">--pilih jenis pinjaman--</option>
            @foreach ($jenis_pinjaman as $j)
            <option value="{{$j->id_jenis}}">{{ $j->jenis_pinjaman }}</option>
            @endforeach
        </select>

        <label for="pinjaman" class="control-label">Besar Pokok Pinjaman (Rp)</label>
        <input type="number" class="form-control" name="besar_pokok_pinjaman" placeholder="besar pokok pinjaman">

        <label for="pinjaman" class="control-label">Besar Angsuran (Rp)</label>
        <input type="number" class="form-control" name="besar_angsuran" placeholder="besar angsuran">

        <label for="pinjaman" class="control-label">Tanggal Pengajuan</label>
        <input type="date" class="form-control" name="tanggal_pengajuan" >

        <label for="pinjaman" class="control-label">Tanggal ACC</label>
        <input type="date" class="form-control" name="tanggal_acc" >

        <label for="pinjaman" class="control-label">Tanggal Jatuh Tempo</label>
        <input type="date" class="form-control" name="tanggal_jatuh_tempo" >

        <label for="pinjaman">Keterangan</label>
        <textarea name="keterangan" class="form-control" required></textarea>

        {{-- <input for="pinjaman" type="hidden" class="form-control" name="status" value="0"> --}}

        @if ($errors->has('pinjaman'))
        <span class="help-block">{{ $errors->first('pinjaman') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('pinjaman.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection