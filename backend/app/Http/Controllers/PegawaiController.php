<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PegawaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $tglLahir = Carbon::parse($request->TglLahirPGW)->format('d-m-Y');
        $tglGabung = Carbon::parse($request->TglGabungPGW)->format('d-m-Y');

        if (isset($request->pegawai_id)) {
            $pegawai = PegawaiModel::findOrFail($request->pegawai_id);
            $message = 'Data pegawai berhasil diperbarui';
        } else {
            $pegawai = new PegawaiModel();
            $message = 'Data pegawai berhasil disimpan';
        }
    
        // dd($request->hasFile('foto'));
        if ($request->hasFile('foto')) {
            $fileName = uniqid() . '_' . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/foto', $fileName, 'public');
            $pegawai->foto = 'storage/' . $path;
        }
    
        $pegawai->namaPegawai   = $request->namaPegawai;
        $pegawai->email         = $request->emailPGW;
        $pegawai->noTelepon     = $request->noTeleponPGW;
        $pegawai->alamat        = $request->alamatPGW;
        $pegawai->tglLahir      = $tglLahir;
        $pegawai->tglGabung     = $tglGabung;
        $pegawai->jabatan_id    = $request->jabatanPGW;
        $pegawai->statusenable  = true;
        $pegawai->departemen_id = $request->departemenPGW;
    
        $pegawai->save();
    
        return response()->json([
            'message' => $message,
            'data'    => $pegawai,
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
