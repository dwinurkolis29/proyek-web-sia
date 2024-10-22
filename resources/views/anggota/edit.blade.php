@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Anggota</h2>
            <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required>{{ $anggota->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $anggota->tanggal_lahir }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="0" {{ $anggota->jenis_kelamin == '0' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="1" {{ $anggota->jenis_kelamin == '1' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" class="form-control" value="{{ $anggota->status }}" required>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No. Telepon:</label>
                    <input type="text" name="no_telepon" class="form-control" value="{{ $anggota->no_telepon }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $anggota->email }}" required>
                </div>
                <button type="submit" class="btn btn-info">Update</button>
                <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection