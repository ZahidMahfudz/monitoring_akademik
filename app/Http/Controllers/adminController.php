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
        echo "selamat datang operator";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function mahasiswa(){
        echo "selamat datang mahasiswa";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function doswal(){
        echo "selamat datang dosen waqli";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function departemen(){
        echo "selamat datang departemen";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='logout'>Logout</a>";
    }
}
