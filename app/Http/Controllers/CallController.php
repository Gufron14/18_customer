<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class CallController extends Controller
{
    public function callNow(Request $request, $id){
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/call/$id", ['json' => ['message' => $request->message]]);
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);

        return redirect('/proses');
    }

    public function show()
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer '.session('token')
        ]]);
        $cResponse = $client->request('GET', "http://localhost:5000/api/user/call/partner/session('partner')");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);

        return view('mitra.dashboard.order.index', ['title' => 'Order Page', 'order' => $cData['call']]);

    }
}
