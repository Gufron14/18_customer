<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {

        $title = 'Home';
        return view('/home', compact('title'));
    }

    public function mitra() {
        
        $title = 'Mitra';
        return view('/mitra', compact('title'));
    }

    public function viewmitra() {
        
        $title = 'Mitra Name';
        return view('/viewmitra', compact('title'));
    }

    public function proses() {
        
        $title = 'Proses';
        return view('/proses', compact('title'));
    }

    public function riwayat() {
        
        $title = 'Riwayat';
        return view('/riwayat', compact('title'));
    }

    public function login(){
        $title = 'Login';
        return view('/login', compact('title'));

    }

    public function register(){
        $title = 'Register';
        return view('/register', compact('title'));
    }
}
