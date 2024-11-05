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
        // Tentukan apakah create atau update berdasarkan parameter $id
        if ($request['id']) {
            // Update data jika ID ditemukan
            $pegawai = PegawaiModel::findOrFail($request['id']); // Akan error 404 jika ID tidak ditemukan
            $message = 'Data pegawai berhasil diperbarui';
        } else {
            // Buat data baru jika ID tidak ada
            $pegawai = new PegawaiModel();
            $message = 'Data pegawai berhasil disimpan';
        }

        // Isi data pegawai
        $pegawai->namaPegawai   = $request->namaPegawai;
        $pegawai->email         = $request->email;
        $pegawai->noTelepon     = $request->noTelepon;
        $pegawai->alamat        = $request->alamat;
        $pegawai->tglLahir      = $request->tglLahir;
        $pegawai->tglGabung     = $request->tglGabung;
        $pegawai->jabatan_id    = $request->jabatan_id;
        $pegawai->departemen_id = $request->departemen_id;

        // Periksa apakah ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');

            // Buat nama file unik untuk foto
            $namaFile = time() . '_' . $foto->getClientOriginalName();

            // Simpan file foto ke dalam folder `public/storage/uploads/foto`
            $path = $foto->storeAs('uploads/foto', $namaFile, 'public');

            // Simpan path foto ke dalam database
            $pegawai->foto = 'storage/' . $path;
        }

        $pegawai->save();

        return response()->json([
            'message' => $message,
            'data' => $pegawai
        ], $id ? 200 : 201); 
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
