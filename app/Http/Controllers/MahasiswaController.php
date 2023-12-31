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
        $user = Auth::user()->name;
        $mahasiswa = Mahasiswa::where('nama', $user)->first();

        $request -> validate([
            'status' => 'required'
        ]);

        $skripsi = Skripsi::create([
            'nama'=>$mahasiswa->nama,
            'NIM'=>$mahasiswa->NIM,
            'status'=>$request->input('status'),
            'nilai'=>$request->input('nilaiskripsi'),
            'lama_studi'=>$request->input('lamastudi'),
            'tgl_lulus_sidang'=>$request->input('tgllulussidang'),
            'scan_berita_acara'=>$request->input('scanberita'),
            'aprove'=>'BELUM DISETUJUI',
            'doswal'=>$mahasiswa->doswal
        ]);

        return redirect('/addskripsi')->with('success', 'Data skripsi berhasil ditambahkan.');

    }

    public function afterupdatemahasiswa(){
        return view('mahasiswa.index');
    }

    public function updatemhs(Request $request){
        $request->validate([
            'jalur_masuk'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
        ]);

        $user = Auth::user()->name ;
        $mahasiswa = Mahasiswa::where('nama', $user)->first();

        $mahasiswa->jalur_masuk = $request->input('jalur_masuk');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->no_hp = $request->input('no_telp');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->kab_kota = $request->input('kab_kota');
        $mahasiswa->provinsi = $request->input('provinsi');
        $mahasiswa->save();

        return redirect('/afterupdate/mahasiswa')->with('success', 'Data skripsi berhasil ditambahkan.');

    }

    // public function coba()
    // {
    //     return view('mahasiswa.search');
    // }

    // public function search(Request $request){
    //     $nim = $request->mahasiswa;
    //     if ($nim){
    //         $mahasiswas = Mahasiswa::where('nim', 'like', '%' . $nim . '%')
    //             ->orWhere('nama', 'like', '%' . $nim . '%')
    //             ->get();

    //     }   else{
    //         $mahasiswas = Mahasiswa::all();
    //     }

    //     return view('mahasiswa.search',['mhs'=>$mahasiswas]);
    // }
}
