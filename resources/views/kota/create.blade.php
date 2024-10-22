@extends('adminlte::page')
@section('content')
<h4>Propinsi Baru</h4>
<form action="{{ route('kota.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('kota') ?'has-error' : '' }}">

        <label for="propinsi" class="control-label">Propinsi</label><br>
        <select class="form-control" name="id_propinsi">
            @foreach ($propinsi as $p)
            <option value="{{$p->id}}">{{ $p->nama_propinsi }}</option>
            @endforeach
        </select>

        <label for="kota" class="control-label">Kota</label>
        <input type="text" class="form-control" name="nama_kota" placeholder="Kota">

        @if ($errors->has('kota'))
        <span class="help-block">{{ $errors->first('kota') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('kota.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection