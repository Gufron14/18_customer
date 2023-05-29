<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\localStorage;
use Illuminate\Support\Facades\Http;

class UserAuthController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
            
            //return redirect("/login");
        }
        $data['title'] = 'Register';
        //$message = $data['message'];
        //return response()->json($message['email']);
        return view("/register", $data);
    }

    // public function login(Request $request){
    //     $response = Http::post('http://localhost/api/user/register', [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ]);
    //     // localStorage.setItem('token', 'abcdhsfsdkjh');
    // }

    public function login(Request $request)
    {
        $client = new Client();
        $userResponse = $client->request('POST', "http://localhost:5000/api/user/login", [ 'json'=> [
            'email' => $request->email,
            'password' => $request->password
        ]]);
        $cBody = $userResponse->getBody()->getContents();
        $detail = json_decode($cBody, true);
        extract($detail);
        if($detail['status']){
            $this->setToken($detail['token']);
            return response()->json($this->getToken());
            //return redirect('/');
        }
        return redirect("/login");
    }

    public function logout()
    {
        $client = new Client(['headers' => [
            //'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.app('App\Http\Controllers\TokenController')->getToken()
        ]]);
        $userResponse = $client->request('POST', "http://localhost:5000/api/user/logout");
        $cBody = $userResponse->getBody()->getContents();
        $detail = json_decode($cBody, true);
        extract($detail);
        if($detail['status']){
            app('App\Http\Controllers\TokenController')->deleteToken();
            return redirect('/login');
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $title = 'Home';
        return view('/home', compact('title'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
