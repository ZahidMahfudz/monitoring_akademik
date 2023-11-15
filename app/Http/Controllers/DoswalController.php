<?php

namespace App\Http\Controllers;

use App\Models\Doswal;
use App\Models\IRS;
use App\Http\Requests\StoredoswalRequest;
use App\Http\Requests\UpdatedoswalRequest;

class DoswalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function verificationmhs()
    {
        $irs = irs::all();
        return view('/dosenwali/verification')->with("irs", $irs);
    }

    function changeStatus($nim)
    {
        $irs = irs::where('nim', $nim)->first();

        if (!$irs) {
            return redirect('/dashboard')->with('error', 'IRS tidak ditemukan.');
        }

        $irs->approve = 'SUDAH DISETUJUI';
        $irs->save();
        return redirect('/dosenwali/verification');
    }

    public function coba()
    {
        return view('mahasiswa.search');
    }

    public function search(Request $request){
        $nim = $request->mahasiswa;
        if ($nim){
            $mahasiswas = Mahasiswa::where('nim', 'like', '%' . $nim . '%')
                ->orWhere('nama', 'like', '%' . $nim . '%')
                ->get();

        }   else{
            $mahasiswas = Mahasiswa::all();
        }

        return view('mahasiswa.search',['mhs'=>$mahasiswas]);
    }

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
    public function store(StoredoswalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(doswal $doswal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doswal $doswal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedoswalRequest $request, doswal $doswal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doswal $doswal)
    {
        //
    }
}
