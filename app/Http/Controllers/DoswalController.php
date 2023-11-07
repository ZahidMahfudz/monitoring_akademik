<?php

namespace App\Http\Controllers;

use App\Models\doswal;
use App\Http\Requests\StoredoswalRequest;
use App\Http\Requests\UpdatedoswalRequest;

class DoswalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function verification()
    {
        $irs = irs::all();
        return view('sesi/verification')->with("irs", $irs);
    }

    function changeStatus($nim)
    {
        $irs = irs::find($nim);
        $irs->idstatus = 1;
        $irs->save();
        return redirect('/dashboard')->with('success', 'Berhasil Balikin Buku !');
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
