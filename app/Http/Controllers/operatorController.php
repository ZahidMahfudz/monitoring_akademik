<?php

namespace App\Http\Controllers;


use app\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OperatorController extends Controller
{
    public function create(){
        return view('operator.addmahasiswa');
    }
    public function addmahasiswa(Request $request){
         // Validasi input data mahasiswa
    //    dd($request->except('_token'));
       $request->validate([
        'NIM' => 'required',
        'nama' => 'required',
        'angkatan' => 'required',
        'status' => 'required',
    ]);

    $mahasiswa = Mahasiswa::create([
        'NIM' => $request->input('NIM'),
        'nama' => $request->input('nama'),
        'angkatan' => $request->input('angkatan'),
        'status' => $request->input('status'),
    ]);

    // // Generate akun pengguna
    // $user = new User();
    // $user->name = $request->input('nama');
    // $user->email = $request->input('NIM') . '@example.com';
    // $user->password = str::str_random(8); // Ganti dengan kata sandi yang aman
    // $user->role = 'mahasiswa';
    // $user->save();
    $user = User::create([
        'name'=>$request->input('nama'),
        'email'=>$request->input('nama').'@gmail.com',
        'password'=>$request->input(str::str_random(8))
    ]);

    return redirect('/admin/operator')->with('success', 'Data mahasiswa dan akun pengguna berhasil ditambahkan.');
    }
}
