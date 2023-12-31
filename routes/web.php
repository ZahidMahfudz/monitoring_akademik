<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\mahasiswas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\DoswalController;
use App\Http\Controllers\IrsController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\PklController;
use App\Models\Doswal;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes test
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index']);//->name('login);
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function(){
    return redirect('/admin');
});

// Route::middleware(['Auth'])->group(function(){
    Route::get('/admin', [adminController::class, 'index']);
    Route::get('/admin/operator', [adminController::class, 'operator']);
    Route::get('/admin/mahasiswa', [adminController::class, 'mahasiswa']);
    Route::get('/admin/doswal', [adminController::class, 'doswal']);
    Route::get('/admin/departemen', [adminController::class, 'departemen']);
    Route::get('/logout', [SesiController::class, 'logout']);
// });


Route::get('/addmahasiswa', [OperatorController::class, 'create']);
Route::post('/operator/addmahasiswa', [OperatorController::class, 'addmahasiswa']);


Route::get('/update', [MahasiswaController::class, 'updatemahasiswa']);
Route::put('mahasiswa/update', [MahasiswaController::class, 'updatemhs']);
// Route::get('/search', [MahasiswaController::class, 'search']);
Route::get('/search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');
Route::get('/afterupdate/mahasiswa', [MahasiswaController::class, 'afterupdatemahasiswa']);


Route::get('/mahasiswa/addirs', [IrsController::class, 'create']);
Route::post('/mahasiswa/addirs', [IrsController::class, 'store'])->name('mahasiswa.addirs.store');


Route::get('/mahasiswa/addkhs', [KhsController::class, 'create']);
Route::post('/mahasiswa/storekhs', [KhsController::class, 'store']);

Route::get('/addskripsi', [MahasiswaController::class, 'createaddskripsi']);
Route::post('/mahasiswa/addskripsi',[MahasiswaController::class, 'addskripsi']);

Route::get('/mahasiswa/addpkl',[PklController::class, 'create'] );
Route::post('/mahasiswa/storepkl', [PklController::class, 'store']);

Route::get('/dosenwali/verification', [DoswalController::class, 'verificationmhs']);
Route::post('/dosenwali/verification', [DoswalController::class, 'verificationmhs']);
Route::post('/dosenwali/verification/{nim}/verify', [DoswalController::class, 'changeStatus']);
