@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Pengguna Admin</h1>
    @if (Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Pengguna Admin</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('listPenggunaAdministrasi.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>List Pengguna Admin</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
