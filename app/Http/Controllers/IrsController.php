<?php

namespace App\Http\Controllers;

use App\Models\irs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreirsRequest;
use App\Http\Requests\UpdateirsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Mahasiswa;

class IrsController extends Controller
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
        return view("mahasiswa.addirs", compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'semester' => 'required',
            'sks' => 'required'
        ]);

        $skripsi = IRS::create([
            'nama'=>$request->input(value('nama')),
            'nim'=>$request->input(value('NIM')),
            'semester'=>$request->input('semester'),
            'sks'=>$request->input('sks'),
            'scanirs'=>$request->input('scanirs'),
            "doswal_id"=>$request->input('doswal'),
            'approve'=>'BELUM DISETUJUI',
        ]);

        return redirect('/addIRS');
    }

        //->with('success', 'Buku Berhasil Ditambahkan!');

    /**
     * Display the specified resource.
     */

    public function show(irs $irs)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(irs $irs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateirsRequest $request, irs $irs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(irs $irs)
    {
        //
    }
}
