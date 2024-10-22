@extends('adminlte::page')
@section('content')
<h4>Form Masukan Nilai Limas</h4>
<form action="{{ route('segi-empat.hasilLimas') }}" method="get">
    {{csrf_field()}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ada kesalahan</strong> Harap diperbaiki.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group {{ $errors->has('luasAlas') ?'has-error' : ''}}">
        <label for="luasAlas" class="control-label">Luas alas</label>
        <input type="text" class="form-control" name="luasAlas">
    </div>
    <div class="form-group {{ $errors->has('luasLimas') ? 'has-error' : ''}}">
        <label for="luasLimas" class="control-label">Tinggi limas</label>
        <input type="text" class="form-control" name="luasLimas">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Proses</button>
    </div>
</form>
@endsection