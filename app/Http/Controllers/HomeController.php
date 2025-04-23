<?php

namespace App\Http\Controllers;

use App\Models\TbRebook;
use App\Models\TbRoom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ruangan = TbRoom::all();
        return view('welcome', compact('ruangan'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function booking(Request $request)
    {
        $request->validate([
            'id_room' => 'required',
        ]);

        $id_room = $request->input('id_room');
        $waktu_mulai = $request->input('waktu_mulai');
        $waktu_berakhir = $request->input('waktu_berakhir');

        $cekRuangan = TbRebook::where('id_room', $id_room)
            ->where('waktu_mulai', '<=', $waktu_berakhir)
            ->where('waktu_berakhir', '>=', $waktu_mulai)
            ->first();

        if ($cekRuangan) {
            return back()->with('error', 'Ruangan sudah terbooking pada waktu yang sama. Silakan pilih waktu lain.');
        }

        $data = new TbRebook();
        $data->id_room = $id_room;
        $data->nama_rebook = $request->input('nama_rebook');
        $data->no_hp_rebook = $request->input('no_hp_rebook');
        $data->waktu_mulai = $waktu_mulai;
        $data->waktu_berakhir = $waktu_berakhir;

        $data->save();

        return back()->with('message', 'Berhasil Book Ruangan. Thank you!.');
    }
}
