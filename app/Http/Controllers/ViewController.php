<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
        $title = 'Home';
        return view('/home', compact('title'));

        //return response()->json($category);
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
        $message['username'] = null;
        $message['email'] = null;
        $message['password'] = null;
        return view('/register', compact(['title', 'message']));
    }

    public function gabungmitra() {
        $title = 'Gabung Mitra';
        return view('/gabungmitra', compact('title'));
    }
}
