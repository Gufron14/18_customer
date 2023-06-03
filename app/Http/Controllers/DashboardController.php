<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('mitra.dashboard.index', [
            "title" => "Dashboard"
        ]);
    }

    public function activation(){
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $uResponse = $client->request('GET', "http://localhost:5000/api/user/partner");
        $uBody = $uResponse->getBody()->getContents();
        $uData = json_decode($uBody, true);
        extract($uData);
        
        // return response()->json($uData);
        return view("mitra.dashboard.activation.index", ['title' => 'Aktivasi Mitra', 'partner' => $uData['partner']]);
    }
    public function table()
    {
        return view('mitra.dashboard.tables', [
            "title" => "Tables"
        ]);
    }
    public function utilities_color()
    {
        return view('mitra.dashboard.utilities-color', [
            "title" => "Color"
        ]);
    }
    public function utilities_border()
    {
        return view('mitra.dashboard.utilities-border', [
            "title" => "Border"
        ]);
    }
    public function utilities_animation()
    {
        return view('mitra.dashboard.utilities-animation', [
            "title" => "Animation"
        ]);
    }
    public function utilities_other()
    {
        return view('mitra.dashboard.utilities-other', [
            "title" => "Other"
        ]);
    }
    public function buttons()
    {
        return view('mitra.dashboard.buttons', [
            "title" => "Buttons"
        ]);
    }
    public function cards()
    {
        return view('mitra.dashboard.cards', [
            "title" => "Cards"
        ]);
    }
    public function charts()
    {
        return view('mitra.dashboard.charts', [
            "title" => "Charts"
        ]);
    }
    public function error_404()
    {
        return view('mitra.dashboard.404', [
            "title" => "404"
        ]);
    }
    public function blank()
    {
        return view('mitra.dashboard.blank', [
            "title" => "Blank"
        ]);
    }
    public function login()
    {
        return view('mitra.dashboard.login', [
            "title" => "Login"
        ]);
    }
    public function register()
    {
        return view('mitra.dashboard.register', [
            "title" => "Register"
        ]);
    }
    public function forgot_password()
    {
        return view('mitra.dashboard.forgot-password', [
            "title" => "Forgot Password"
        ]);
    }
}
