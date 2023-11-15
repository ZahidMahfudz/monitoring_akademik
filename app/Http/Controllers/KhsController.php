<?php

namespace App\Http\Controllers;

use App\Models\khs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorekhsRequest;
use App\Http\Requests\UpdatekhsRequest;

use App\Models\Mahasiswa;


class KhsController extends Controller
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
        $user = Auth::user()->name;
        $mahasiswa = Mahasiswa::where('nama', $user)->first();
        return view("mahasiswa.addkhs", compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'semester' => 'required',
            'sks_semester' => 'required',
            'sks_kumulatif'=> 'required'
        ]);

        $khs = khs::create([
            'nama'=>$request->input(value('nama')),
            'nim'=>$request->input(value('NIM')),
            'semester'=>$request->input('semester'),
            'sks_semester'=>$request->input('sks_semester'),
            'sks_kumulatif'=>$request->input('sks_kumulatif'),
            'ip'=>$request->input('ip'),
            'scankhs'=>$request->input('scankhs'),
            'approve'=>'BELUM DISETUJUI',
            'doswal_id'=>$request->input('doswal'),
        ]);

        return redirect('/mahasiswa/addkhs');
    }

    /**
     * Display the specified resource.
     */
    public function show(khs $khs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(khs $khs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekhsRequest $request, khs $khs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(khs $khs)
    {
        //
    }
}
