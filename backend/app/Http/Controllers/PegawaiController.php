<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = PegawaiModel::all();
        return response()->json($pegawai);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'namaPegawai' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pegawai_M',
            'noTelepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'tglLahir' => 'required|date',
            'tglGabung' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // contoh validasi untuk foto
            // Tambahkan field foto jika ada
        ]);

        // Menyimpan pegawai baru
        $pegawai = PegawaiModel::create($validatedData);

        return response()->json($pegawai, 201); // 201 Created
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = PegawaiModel::find($id);

        if (!$pegawai) {
            return response()->json(['message' => 'Pegawai tidak ditemukan'], 404);
        }

        return response()->json($pegawai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawai = PegawaiModel::find($id);

        if (!$pegawai) {
            return response()->json(['message' => 'Pegawai tidak ditemukan'], 404);
        }

        // Validasi data
        $validatedData = $request->validate([
            'namaPegawai' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:pegawai_M,email,' . $pegawai->id,
            'noTelepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'tglLahir' => 'sometimes|required|date',
            'tglGabung' => 'sometimes|required|date',
            // Tambahkan validasi untuk foto jika ada
        ]);

        $pegawai->update($validatedData);

        return response()->json($pegawai);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = PegawaiModel::find($id);

        if (!$pegawai) {
            return response()->json(['message' => 'Pegawai tidak ditemukan'], 404);
        }

        $pegawai->delete();

        return response()->json(['message' => 'Pegawai berhasil dihapus']);
    }
}
