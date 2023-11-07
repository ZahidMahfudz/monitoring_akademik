<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;

class adminController extends Controller
{
    function index(){
        echo "selamat datang anjing";
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
        echo "selamat datang dosen waqli";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function departemen(){
        echo "selamat datang departemen";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
