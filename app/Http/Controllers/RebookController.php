<?php

namespace App\Http\Controllers;

use App\Models\TbRebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('tb_rebook as a')
        ->select('a.id','b.nm_room as nama_ruangan', 'nama_rebook', 'no_hp_rebook', 'waktu_mulai', 'waktu_berakhir')
        ->leftJoin('tb_room as b', 'b.id', '=', 'a.id_room')
        ->orderByDesc('waktu_mulai')
        ->get();

        return view('booking.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('tb_rebook as a')
        ->select('a.id','b.nm_room as nama_ruangan', 'nama_rebook', 'no_hp_rebook', 'waktu_mulai', 'waktu_berakhir')
        ->leftJoin('tb_room as b', 'b.id', '=', 'a.id_room')
        ->where('a.id','=',$id)
        ->first();
    return view('booking.show',compact('data'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $data = DB::table('tb_rebook as a')
            ->select('a.id','b.nm_room as nama_ruangan', 'nama_rebook', 'no_hp_rebook', 'waktu_mulai', 'waktu_berakhir')
            ->leftJoin('tb_room as b', 'b.id', '=', 'a.id_room')
            ->where('nama_rebook', 'LIKE', "%{$search}%")
            ->get();

        return view('booking.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TbRebook::find($id);
        $data->delete();
        return back()->with('message', 'Berhasil cancel ruangan booking.');
    }
}


