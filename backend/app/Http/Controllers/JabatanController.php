<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

/**
 * @OA\Info(title="Documentation API", version="1.0")
 */
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
        $data = [
            "data" => $jabatan,
            "message" => 'success'
        ];
        return response()->json($data);
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
        'namaJabatan' => 'required|string|max:255',
        'deskripsiJabatan' => 'required|string|max:255',
        'golonganGaji' => 'nullable|string',
        'statusEnable' => 'required|boolean',
    ]);

    // Menyimpan data ke dalam database
    $jabatan = JabatanModel::create($validatedData);

    // Mengembalikan response JSON
    return response()->json($jabatan, 201);
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
