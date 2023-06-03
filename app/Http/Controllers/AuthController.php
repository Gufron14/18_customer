<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $client = new Client();
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/register", [ 'json'=> [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]]);
        $cBody = $cResponse->getBody()->getContents();
        $data = json_decode($cBody, true);
        extract($data);
        if($data['status']){
            return redirect("/login");
        }
        $data['title'] = 'Register';
        // return response()->json($data);
        return view("auth.register", $data);
    }

    public function login(Request $request)
    {
        $client = new Client();
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/login", [ 'json'=> [
            'email' => $request->email,
            'password' => $request->password
        ]]);
        $cBody = $cResponse->getBody()->getContents();
        $data = json_decode($cBody, true);
        extract($data);
        if($data['status']){
            $sesi = session()->put('token', $data['token']);
            //$hasilsesi = session('token');
            return redirect("/");

            //return response()->json();
        }
        $data['title'] = 'Login';
        return view("auth.login", $data);
    }

    public function logout(Request $request)
    {   
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
            ]]);
            

        $aResponse = $client->request('POST', "http://localhost:5000/api/user/logout");
        $aBody = $aResponse->getBody()->getContents();
        $aData = json_decode($aBody, true);
        extract($aData);
        if($aData['status']){
            session()->forget('token');
            session()->forget('role');

            return redirect("/login");

            //return response()->json();
        }
        return redirect("/home");
    }
}
