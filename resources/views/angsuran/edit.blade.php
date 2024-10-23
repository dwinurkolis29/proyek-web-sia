@extends('adminlte::page')
@section('content')
<h4>Transaksi Angsuran</h4>
<form action="{{ route('angsuran.update', $angsuran->id_angsuran) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('angsuran') ? 'has-error' : '' }}">

        <label for="angsuran" class="control-label">Nama</label>
        <input type="text" class="form-control" value="{{ $angsuran->anggota->nama }}" disabled>

        <label for="angsuran" class="control-label">Besar Angsuran (Rp)</label>
        <input type="text" class="form-control" value="{{ $angsuran->besar_angsuran }}" disabled>

        <label for="angsuran" class="control-label">Tanggal Jatuh Tempo</label>
        <input type="text" class="form-control" value="{{ $angsuran->tanggal_jatuh_tempo }}" disabled>

        <label for="angsuran" class="control-label">Status</label><br>
        <select class="form-control" name="status">
            <option value="{{ $angsuran->status }}" selected>{{ $angsuran->status == 1 ? 'Sudah Bayar' : 'Belum Bayar' }}</option>
            <option value="{{ $angsuran->status == 1 ? '0' : '1' }}">{{ $angsuran->status == 1 ? 'Belum Bayar' : 'Sudah Bayar' }}</option>
        </select><br>


        @if ($errors->has('angsuran'))
        <span class="help-block">{{ $errors->first('angsuran') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('angsuran.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection