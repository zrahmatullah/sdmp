<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// untuk pegawai
// Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::apiResource('pegawai', PegawaiController::class);
Route::apiResource('jabatan', JabatanController::class);
Route::apiResource('departemen', DepartemenController::class);


// Route::get('/pegawai', [PegawaiController::class, 'index']);
