<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoremahasiswaRequest;
use App\Http\Requests\UpdatemahasiswaRequest;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremahasiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemahasiswaRequest $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }

    public function createaddskripsi(){
        $user = Auth::user()->name;

        $mahasiswa = Mahasiswa::where('nama', $user)->first();

        return view('mahasiswa.addskripsi', compact('mahasiswa'));
    }

    public function addskripsi(Request $request){
        $request -> validate([
            'status' => 'required'
        ]);

        $skripsi = Skripsi::create([
            'nama'=>$request->input('nama'),
            'NIM'=>$request->input('NIM'),
            'status'=>$request->input('status'),
            'nilai'=>$request->input('nilaiskripsi'),
            'lama_studi'=>$request->input('lamastudi'),
            'tgl_lulus_sidang'=>$request->input('tgllulussidang'),
            'scan_berita_acara'=>$request->input('scanberita'),
            'aprove'=>'BELUM DISETUJUI',
            "doswal_id"=>$request->input('doswal')
        ]);

        return redirect('/addskripsi')->with('success', 'Data skripsi berhasil ditambahkan.');

    }

    public function updatemahasiswa(){
        $user = Auth::user()->name ;

        $mahasiswa = Mahasiswa::where('nama', $user)->first();
        

        return view('mahasiswa.update', compact('mahasiswa'));
    }

    public function updatemhs(Request $request){   
        $update = mahasiswa::update([
            'jalur_masuk' =>$request->input('jalur_masuk'),
            'email' =>$request->input('email'),
            'no_telp'=>$request->input('no_telp')
        ]);
        return redirect('/update')->with('success', 'Data skripsi berhasil ditambahkan.');

    }
}
