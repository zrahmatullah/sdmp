<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

/**
 * @OA\Info(title="Documentation API", version="1.0")
 * @OA\Server(url="", description="API Server")
 */
class JabatanController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/jabatan",
     *     summary="Get all jabatan",
     *     operationId="getAllJabatan",
     *     tags={"Jabatan"},
     *     @OA\Response(
     *         response=200,
     *         description="A list of jabatan",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Jabatan")
     *         )
     *     )
     * )
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
     * @OA\Post(
     *     path="/api/jabatan",
     *     summary="Create a new jabatan",
     *     operationId="createJabatan",
     *     tags={"Jabatan"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Jabatan")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Jabatan created successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Jabatan")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaJabatan' => 'required|string|max:255',
            'deskripsiJabatan' => 'required|string|max:255',
            'golonganGaji' => 'nullable|string',
            'statusEnable' => 'required|boolean',
        ]);

        $jabatan = JabatanModel::create($validatedData);

        return response()->json($jabatan, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/jabatan/{id}",
     *     summary="Get jabatan by ID",
     *     operationId="getJabatanById",
     *     tags={"Jabatan"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Jabatan ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Jabatan details",
     *         @OA\JsonContent(ref="#/components/schemas/Jabatan")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Jabatan not found"
     *     )
     * )
     */
    public function show($id)
    {
        $jabatan = JabatanModel::find($id);
        if (!$jabatan) {
            return response()->json(['message' => 'Jabatan tidak ditemukan'], 404);
        }
        return response()->json($jabatan);
    }

    /**
     * @OA\Put(
     *     path="/api/jabatan/{id}",
     *     summary="Update jabatan",
     *     operationId="updateJabatan",
     *     tags={"Jabatan"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Jabatan ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Jabatan")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Jabatan updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Jabatan")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Jabatan not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        // Implement update logic
        $jabatan = JabatanModel::find($request['id']);
         if (!$jabatan) {
            return response()->json(['message' => 'Jabatan tidak ditemukan'], 404);
        }
        //validasi
        $validatedData = $request->validate([
             'namaJabatan' => 'required|string|max:255',
            'deskripsiJabatan' => 'required|string|max:255',
            'golonganGaji' => 'nullable|string',
            'statusEnable' => 'required|boolean',
        ]);
        $jabatan->update($validatedData);
        return response()->json($jabatan);
    }

    /**
     * @OA\Delete(
     *     path="/api/jabatan/{id}",
     *     summary="Delete jabatan",
     *     operationId="deleteJabatan",
     *     tags={"Jabatan"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Jabatan ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Jabatan deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Jabatan not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $jabatan = JabatanModel::find($id);
        if (!$jabatan) {
            return response()->json(['message' => 'Jabatan tidak ditemukan'], 404);
        }
        $jabatan->delete();
        return response()->json(['message' => 'Jabatan Berhasil dihapus'], 200);
    }
}
