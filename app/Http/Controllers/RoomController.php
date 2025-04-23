<?php

namespace App\Http\Controllers;

use App\Models\TbRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TbRoom::all ();
        return view('ruangan.index', compact('data'));
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
        $request->validate([
            'nm_room' => 'required',
            'foto_room' => 'file|mimes:png,jpg,jpeg,svg,pdf|max:2048',
        ]);

        $data = new TbRoom();

        if($request->file('foto_room')){
            $nm_room = $data->nm_room;
            $file= $request->file('foto_room');
            $filename= date('Y-M-d').'-'.$nm_room.'-'.$file->getClientOriginalName();
            $file->move(public_path('Image/Ruangan'), $filename);
            $data['foto_room']= $filename;
        }

        $data->nm_room = $request->input('nm_room');
        $data->lokasi = $request->input('lokasi');

        $data->save();

        return back()->with('message', 'Ruangan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = TbRoom::find($id);
        return view('ruangan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nm_room' => 'required',
            'foto_room' => 'file|mimes:png,jpg,jpeg,svg,pdf|max:2048',
        ]);

        $data= TbRoom::find($id);

        if($request->file('foto_room')){
            $destinationPath = 'Image/Ruangan/';
            $oldFilename = $destinationPath . $data->foto_room;

            if(File::exists($oldFilename)){
                File::delete($oldFilename);
            }

            $nm_room = $request->input('nm_room');
            $file= $request->file('foto_room');
            $filename= date('Y-M-d').'-'.$nm_room.'-'.$file->getClientOriginalName();
            $file->move(public_path('Image/Ruangan'), $filename);
            $data['foto_room']= $filename;
        }

        $data->nm_room = $request->input('nm_room');
        $data->lokasi = $request->input('lokasi');

        $data->save();

        return to_route('listRuangan.index')->with('message', 'Ruangan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TbRoom::find($id);
        $destination = 'Image/Ruangan/'. $data->foto_room;

        if(File::exists($destination)){
            File::delete($destination);
        }
        $data->delete();
        return back()->with('message', 'Ruangan berhasil dihapus.');
    }
}
