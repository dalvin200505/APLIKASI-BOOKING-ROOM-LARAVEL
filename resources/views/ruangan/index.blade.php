@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Ruangan</h1>
    @if (Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('listRuangan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="">Nama Ruangan</label>
                        <input type="text" name="nm_room" placeholder="nama ruangan" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="">Lokasi Ruangan</label>
                        <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="">Foto Ruangan</label>
                        <input type="file" name="foto_room" class="form-control">
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
                <h4>List Ruangan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Lokasi Ruangan</th>
                            <th>Foto Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nm_room }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td><img src="{{ url('Image/Ruangan/' .$item->foto_room) }}" alt="" style="width: 150px; height: 100px;"></td>
                            <td>
                                <form action="{{ route('listRuangan.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('listRuangan.edit',  $item->id) }}" class="btn btn-warning">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus {{ $item->nm_room }}?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
