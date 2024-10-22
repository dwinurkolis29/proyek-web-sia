@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Daftar Anggota</h2>
            <a class="btn btn-primary" href="{{ route('anggota.create') }}">Tambah Anggota</a>
            @if ($message = Session::get('message'))
            <div class="alert alert-success martop-sm">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $a)
                    <tr>
                        <td>{{ $a->id_anggota }}</td>
                        <td>{{ $a->nama }}</td>
                        <td>{{ $a->alamat }}</td>
                        <td>{{ $a->tanggal_lahir }}</td>
                        <td>{{ $a->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $a->status }}</td>
                        <td>{{ $a->no_telepon }}</td>
                        <td>{{ $a->email }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('anggota.destroy', $a->id_anggota) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $anggota->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>
@endsection