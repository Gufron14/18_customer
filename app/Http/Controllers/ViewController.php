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
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $pResponse = $client->request('GET', "http://localhost:5000/api/user/partner/active");
        $pBody = $pResponse->getBody()->getContents();
        $pData = json_decode($pBody, true);
        extract($pData);
        return view("mitra", ['title' => 'Mitra', 'partners' => $pData['partner']]);
    }

    public function viewmitra() {
        
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $qResponse = $client->request('GET', "http://localhost:5000/api/user/partner/you");
        $qBody = $qResponse->getBody()->getContents();
        $qData = json_decode($qBody, true);
        extract($qData);
        return view("viewmitra", ['title' => 'Mitra', 'partner' => $qData['partner']]);
    }

    public function proses() {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $cResponse = $client->request('GET', "http://localhost:5000/api/user/call/process");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return view("/proses", ['title' => 'Proses', 'calls' => $cData['call']]);
    }

    public function riwayat() {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $cResponse = $client->request('GET', "http://localhost:5000/api/user/call/final");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return view("/riwayat", ['title' => 'riwayat', 'calls' => $cData['call']]);
    }

    public function login(){
        return view('auth.login', ['title' => 'Login', 'message' => null]);
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
