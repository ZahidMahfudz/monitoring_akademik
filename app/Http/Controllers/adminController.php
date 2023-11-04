<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('mahasiswa.index');
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
