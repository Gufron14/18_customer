<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $uResponse = $client->request('GET', "http://localhost:5000/api/user/me");
        $uBody = $uResponse->getBody()->getContents();
        $uData = json_decode($uBody, true);
        extract($uData);
        $cResponse = $client->request('GET', "http://localhost:5000/api/user/category");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        $pResponse = $client->request('GET', "http://localhost:5000/api/user/partner/active");
        $pBody = $pResponse->getBody()->getContents();
        $pData = json_decode($pBody, true);
        extract($pData);
        return view("home", ['title' => 'Home', 'user' => $uData['user'], 'categories' => $cData['category'], 'partners' => $pData['partner']]);
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
        return view('auth.login', compact('title'));
        

    }

    public function register(){
        $data['title'] = 'Register';
        $data['message'] = null;
        return view('auth.register', $data);
    }

    public function gabungmitra() {
        
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $uResponse = $client->request('GET', "http://localhost:5000/api/user/category");
        $uBody = $uResponse->getBody()->getContents();
        $uData = json_decode($uBody, true);
        extract($uData);
        // $title = 'Gabung Mitra';
        return view("mitra.gabungmitra", ['title' => 'Gabung Mitra', 'categories' => $uData['category']]);
    }

    public function statusmitra() {
        $title = 'Status Akun Mitra';
        return view('/statusmitra', compact('title'));
    }

    public function editprofile(){
        $title = 'Edit Profile';
        return view('/editprofile', compact('title'));
    }

    public function ubahpassword(){
        $title = 'Ubah Password';
        return view('/ubahpassword', compact('title'));
    }
}
