@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Booking Ruangan</h1>
    @if (Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>List Booking Ruangan</h4>
            </div>
             <div class="card-body">

                <form action="{{ route('RebookRuangan.search') }}" method="GET">
                    <input type="text" name="search" placeholder="Cari nama Pembooking">
                    <button type="submit"class="btn btn-primary">Search</button>
                </form>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Nama yang Booking</th>
                            <th>No. Hp</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Berakhir</th>
                            <th>Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_ruangan }}</td>
                            <td>{{ $item->nama_rebook }}</td>
                            <td><a href="https://wa.me/{{ $item->no_hp_rebook }}" target="_blank">{{ $item->no_hp_rebook }}</a></td>
                            <td>{{ $item->waktu_mulai }}</td>
                            <td>{{ $item->waktu_berakhir }}</td>
                            <td>
                                <form action="{{ route('RebookRuangan.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('RebookRuangan.show', $item->id) }}" class="btn btn-warning">cetak</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin cancel ruangan untuk {{ $item->nama_rebook }}?')">Cancel</button>
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
