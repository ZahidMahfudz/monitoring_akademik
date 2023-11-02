<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operator extends Controller
{
    public function create(){
        return view('operator.addmahasiswa');
    }
    public function addmahasiswa(Request $request){
         // Validasi input data mahasiswa
         $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required',
            'angkatan' => 'required',
         ]);

    }
}
