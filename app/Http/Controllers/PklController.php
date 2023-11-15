<?php

namespace App\Http\Controllers;

use App\Models\pkl;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorepklRequest;
use App\Http\Requests\UpdatepklRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class PklController extends Controller
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

        return view('mahasiswa.addpkl', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'status' => 'required',
        ]);

        $pkl = pkl::create([
            'nama'=>$request->input(value('nama')),
            'NIM'=>$request->input(value('NIM')),
            'status'=>$request->input('status'),
            'nilai'=>$request->input('nilaipkl'),
            'scanberita'=>$request->input('scanberita'),
            'approve'=>'BELUM DISETUJUI',
            'doswal_id'=>$request->input('doswal'),
        ]);

        return redirect('/afterupdate/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(pkl $pkl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pkl $pkl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepklRequest $request, pkl $pkl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pkl $pkl)
    {
        //
    }
}
