@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Tambah Anggota</h2>
            <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="0">Laki-laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No. Telepon:</label>
                    <input type="text" name="no_telepon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection