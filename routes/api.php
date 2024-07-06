<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\penimbanganController;
use App\Http\Controllers\userController;
use App\Http\Controllers\imunisasiController;
use App\Http\Controllers\RiwayatPenyakitController;

Route::post('/register', [AuthController::class, 'userRegister']);
Route::post('/login', [AuthController::class, 'userLogin']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/getAllUser', [userController::class, 'getAllUser']);

Route::post('/createAnak', [anakController::class, 'createAnak']);
Route::get('/getAnak', [anakController::class, 'getAnak']);
Route::put('/updateAnak/{nik}', [anakController::class, 'updateAnak']);
//get data anak by nik
Route::get('/getAnak/{nik}', [anakController::class, 'getAnakByNik']);
//delete data anak
Route::delete('/deleteAnak/{nik}', [anakController::class, 'deleteAnak']);
//update umur anak menggunakan patch
Route::patch('/updateUmur/{nik}', [anakController::class, 'updateUmur']);

//penimbangan
Route::get('/getPenimbangan', [penimbanganController::class, 'getPenimbangan']);
Route::post('/createPenimbangan', [penimbanganController::class, 'createPenimbangan']);
Route::get('/getPenimbanganById/{id}', [penimbanganController::class, 'getPenimbanganById']);
Route::get('/getPenimbanganByNik/{nik_anak}', [penimbanganController::class, 'getPenimbanganByNik']);
Route::put('/updatePenimbangan/{id}', [penimbanganController::class, 'updatePenimbangan']);
Route::delete('/deletePenimbangan/{id}', [penimbanganController::class, 'deletePenimbangan']);
Route::get('/getPenimbanganByBulan/{tahun}/{bulan}', [penimbanganController::class, 'getPenimbanganByBulan']);

//imunisasi
Route::get('/getImunisasi', [imunisasiController::class, 'getImunisasi']);
Route::post('/createImunisasi', [imunisasiController::class, 'createImunisasi']);
Route::get('/getImunisasiById/{id}', [imunisasiController::class, 'getImunisasiById']);
Route::put('/updateImunisasi/{id}', [imunisasiController::class, 'updateImunisasi']);
Route::delete('/deleteImunisasi/{id}', [imunisasiController::class, 'deleteImunisasi']);
Route::get('/getImunisasiByBulan/{tahun}/{bulan}', [imunisasiController::class, 'getImunisasiByBulan']);

//Riwayat Penyakit
Route::get('/getMedical', [RiwayatPenyakitController::class, 'getRiwayatPenyakit']);
Route::post('/createMedical', [RiwayatPenyakitController::class, 'createRiwayatPenyakit']);
Route::get('/getMedicalByNik/{nik_anak}', [RiwayatPenyakitController::class, 'getRiwayatPenyakitByNik']);
Route::get('/getMedicalById/{id}', [RiwayatPenyakitController::class, 'getRiwayatPenyakitById']);
Route::put('/updateMedical/{id}', [RiwayatPenyakitController::class, 'updateRiwayatPenyakit']);
Route::delete('/deleteMedical/{id}', [RiwayatPenyakitController::class, 'deleteRiwayatPenyakit']);




//get all user
Route::get('/getAllUser', [userController::class, 'getAllUser']);

//get kader
Route::get('/getKader', [userController::class, 'showKader']);

//showKader by username
Route::get('/getKader/{username}', [userController::class, 'showKaderByUsername']);
Route::get('/getUser/{id}', [userController::class, 'getUserById']);

//update user
Route::put('/updateUser/{id}', [userController::class, 'updateUser']);

Route::get('/cekUsername/{username}', [userController::class, 'cekUsername']);
Route::get('/cekEmail/{email}', [userController::class, 'cekEmail']);
Route::get('/cekNik/{nik}', [userController::class, 'cekNik']);
//cek username edit
Route::get('/cekUsernameEdit/{username}/{id}', [userController::class, 'cekUsernameEdit']);
//cek email edit
Route::get('/cekEmailEdit/{email}/{id}', [userController::class, 'cekEmailEdit']);

//delete user

Route::delete('/deleteUser/{id}', [userController::class, 'deleteUser']);
