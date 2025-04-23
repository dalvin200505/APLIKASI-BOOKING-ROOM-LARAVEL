<?php

namespace App\Http\Controllers;

use App\Models\TbUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TbUsers::all();
        return view('pengguna_admin.index', compact('data'));
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
            'username' => 'required|unique:tb_users,username',
            'password' => 'required',
        ]);

        $data = new TbUsers();

        $data->nama_lengkap = $request->input('nama_lengkap');
        $data->username = $request->input('username');
        $data->password = Hash::make($request->input('password'));
        $data->save();

        return back()->with('message', 'Pengguna Admin berhasil ditambahkan.');
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
        $data = TbUsers::find($id);
        return view('pengguna.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = new TbUsers();

        $data->nama_lengkap = $request->input('nama_lengkap');
        $data->username = $request->input('username');
        $data->password = Hash::make($request->input('password'));
        $data->save();

        return back()->with('message', 'Pengguna Admin berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
