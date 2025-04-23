@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Halaman Cetak</h1>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Cetak Ruangan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                        <tr>
                            <th>Nama Ruangan</th>
                            <th>Nama yang Booking</th>
                            <th>No. Hp</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Berakhir</th>
                        </tr>
                        <tr>
                            <td>{{ $data->nama_ruangan }}</td>
                            <td>{{ $data->nama_rebook }}</td>
                            <td><{{ $data->no_hp_rebook }}</td>
                            <td>{{ $data->waktu_mulai }}</td>
                            <td>{{ $data->waktu_berakhir }}</td>

                        </tr>


            </div>
        </div>
    </div>
</div>
@endsection
