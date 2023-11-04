<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\OperatorController;

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


Route::get('/addmahasiswa', function(){
    return view('operator/addmahasiswa');
});
Route::post('/operator/addmahasiswa', [OperatorController::class, 'addmahasiswa']);
