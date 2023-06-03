<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class CallController extends Controller
{
    public function callNow($id){
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/call/$id");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);

        return redirect('/proses');
    }
}
