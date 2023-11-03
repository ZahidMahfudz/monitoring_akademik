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
        $validator= validator::make($request->all(),[
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'reuqired',
        ]);

         if($validator ->fails()) return redirect()->back()->withInput()->withErrors($validator);

       //  Simpan data mahasiswa ke dalam database
        // $mahasiswa = Mahasiswa::create([
        //     'nim' => $request->nim,
        //     'nama' => $request->nama,
        //     'angkatan' => $request->angkatan,
        //     'status' => 'AKTIF',
        // ]);

        // // Generate akun akses
        // $user = User::create([
        //     'name' => $validatedData['nama'],
        //     'email' => $validatedData['nim'] . '@example.com', // Ganti dengan format email yang sesuai
        //     'password' => bcrypt(Str::random(8)), // Generate kata sandi acak
        // ]);

        // Tampilkan respons sukses
        return redirect('/operator/addmahasiswa')->with('success', 'Data mahasiswa dan akun akses berhasil ditambahkan.');
    }
}
