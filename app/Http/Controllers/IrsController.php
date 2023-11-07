<?php

namespace App\Http\Controllers;

use App\Models\irs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreirsRequest;
use App\Http\Requests\UpdateirsRequest;

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
        return view("mahasiswa/addirs");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'scanirs' => 'required|mimes:pdf',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return redirect('/mahasiswa/addirs')
                ->withErrors($validator)
                ->withInput();
        }

        $irs = new irs;
        $irs->nama = $request->nama;
        $irs->nim = $request->nim; 
        $irs->semester = $request->semester; 
        $irs->sks = $request->sks;
        $originalFileName = $request->file('scanirs')->getClientOriginalName();
        
        // Menyimpan berkas dengan nama asli
        $irs->scanirs = $request->file('scanirs')->storeAs('pdfs', $originalFileName);

        $irs->save();

        return redirect('/mahasiswa/addirs');
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
