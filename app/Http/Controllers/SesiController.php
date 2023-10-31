<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=> 'email wajib diisi',
            'password.required'=> 'password wajib diisi',
        ]);

        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
           if(Auth::user()->role == 'operator'){
            return redirect('admin/operator');
           }
           elseif(Auth::user()->role == 'mahasiswa'){
            return redirect('admin/mahasiswa');
           }
           elseif(Auth::user()->role == 'doswal'){
            return redirect('admin/doswal');
           }
           elseif(Auth::user()->role == 'departemen'){
            return redirect('admin/departemen');
           }
        }
        else{
            return redirect('')->withErrors('uername dan password titdak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
