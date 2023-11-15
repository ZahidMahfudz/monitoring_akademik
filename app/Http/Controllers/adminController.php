<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doswal;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;

class adminController extends Controller
{
    function index(){
        echo "Kamu coba nerobos ya, jangan diulang ya";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function operator(){
        return view('operator.index');
    }
    function mahasiswa(){
        $user = Auth::user()->name ;
        $mahasiswa = Mahasiswa::where('nama', $user)->first();
        return view('mahasiswa.update', compact('mahasiswa'));

    }
    function doswal(){
        $user = Auth::user()->name ;
        $doswal = Doswal::where('nama', $user)->first();
        return view('dosenwali.index', compact('doswal'));
    }
    function departemen(){
        echo "selamat datang departemen";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
