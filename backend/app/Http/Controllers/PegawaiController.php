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
        // dari table pegawai_m ada yang di edit, di not null nya, semua nya di matikan kecuali id dan statusenable
        if ($request->has('id')) {
            $pegawai = PegawaiModel::findOrFail($request->id);
            $message = 'Data pegawai berhasil diperbarui';
        } else {
            $pegawai = new PegawaiModel();
            $foto = $request->file('foto');
            $namaFile = time() . '_' . $foto->getClientOriginalName();
            $path = $foto->storeAs('uploads/foto', $namaFile, 'public');
            $pegawai->foto = 'storage/' . $path;
            $message = 'Data pegawai berhasil disimpan';
        }
        $pegawai->namaPegawai   = $request->namaPegawai ?? 'null';
        $pegawai->email         = $request->email ?? 'null';
        $pegawai->noTelepon     = $request->noTelepon ?? null;
        $pegawai->alamat        = $request->alamat ?? 'null';
        $pegawai->tglLahir      = $request->tglLahir ?? null ;
        $pegawai->tglGabung     = $request->tglGabung ?? null ;
        $pegawai->jabatan_id    = $request->jabatan_id ?? null;
        $pegawai->statusenable   = 'true';
        $pegawai->pegawai_id    = 12334;
        $pegawai->departemen_id = $request->departemen_id ?? 'null';
        $pegawai->save();

    
        return response()->json([
            'message' => $message,
            'data' => $pegawai
        ], $request->has('id') ? 200 : 201);
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
    public function update(Request $request)
    {
        $pegawai = PegawaiModel::find($request['id']);

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
