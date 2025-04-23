@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Ruangan</h1>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('listRuangan.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Nama Ruangan</label>
                        <input type="text" name="nm_room" placeholder="nama ruangan" class="form-control" value="{{ $data->nm_room }}">
                      </div>
                      <div class="mb-3">
                        <label for="">Lokasi Ruangan</label>
                        <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan" class="form-control">{{ $data->lokasi }}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="">Foto Ruangan</label>
                        <input type="file" name="foto_room" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
