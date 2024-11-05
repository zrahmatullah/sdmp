<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = JabatanModel::all();
        return response()->json($jabatan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'namaJabatan'=> 'required|string|max:255',
            'deskripsiJabatan'=> 'required|string|max:255',
            'golonganGaji'=> 'nullable|string',
        ]);
        // dd($validatedData);
        //menyimpan
        $jabatan = JabatanModel::create($validatedData);
        return response()->json($jabatan,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jabatan = JabatanModel::find($id);
        if(!$jabatan){
            return response()->json(['message'=> 'Jabatan tidak ditemukan', 404]);
        }else{}{
            return response()->json($jabatan);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan= JabatanModel::find($id);
        //
        if(!$jabatan){
            return response()->json(['message'=>'Jabatan tidak ditemukan']);
        }
        $jabatan->delete();
        return response()->json(['message'=> 200, 'Jabatan Berhasil dihapus'], 200);
    }
}
