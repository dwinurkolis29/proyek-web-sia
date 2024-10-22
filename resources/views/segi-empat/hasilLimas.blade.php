@extends('adminlte::page')
@section('content')
<h1>Hasil Perhitungan Limas</h1>
<table class="table table-striped table-bordered">
    <tr>
        <td>Luas alas </td>
        <td>{{$limas->luasAlas}}</td>
    </tr>
    <tr>
        <td>Tinggi limas </td>
        <td>{{$limas->luasLimas}}</td>
    </tr>
    <tr>
        <td>Volume </td>
        <td>{{$limas->volume()}}</td>
    </tr>
</table>
@endsection