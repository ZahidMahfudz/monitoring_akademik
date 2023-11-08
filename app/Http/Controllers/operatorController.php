<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Mahasiswa;
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

    // dd($request->all());
    $mahasiswa = Mahasiswa::create([
        'NIM' => $request->input('NIM'),
        'nama' => $request->input('nama'),
        'angkatan' => $request->input('angkatan'),
        'status' => $request->input('status'),
        'doswal_id' => $request->input('doswal'),
    ]);


    $user = User::create([
        'name'=>$request->input('nama'),
        'email'=>$request->input('nama').'@gmail.com',
        'password'=>bcrypt('mahasiswa@123'),
        'role'=>'mahasiswa'
    ]);

    return redirect('/admin/operator')->with('success', 'Data mahasiswa dan akun pengguna berhasil ditambahkan.');
    }
}
