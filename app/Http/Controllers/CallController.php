<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CallController extends Controller
{
    public function callNow(Request $request, $id)
    {
        // dd($request);
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);

        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $gmapLink = 'https://www.google.com/maps/search/?api=1&query=' . $geo['geoplugin_latitude'] . ',' . $geo['geoplugin_longitude'];
        $address = $geo['geoplugin_city'] . ', ' . $geo['geoplugin_region'] . ' (' . $request->address . ')';

        $cResponse = $client->request('POST', "http://localhost:5000/api/user/call/$id", ['json' => [
            'message' => $request->message,
            'address' => $address,
            'link_google_map' => $gmapLink,
        ]]);
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return redirect('/proses');
    }

    public function show()
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);
        $cResponse = $client->request('GET', "http://localhost:5000/api/user/call/partner/session('partner')");
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return view('mitra.dashboard.order.index', ['title' => 'Order Page', 'order' => $cData['call']]);
    }
    public function updateProgres(Request $request, $id)
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/call/update/$id", ['json' => ['order_status' => $request->progres]]);
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return redirect('/dashboard/order');
    }
    public function orderCancel($id)
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);
        $cResponse = $client->request('POST', "http://localhost:5000/api/user/call/update/$id", ['json' => ['order_status' => 8]]);
        $cBody = $cResponse->getBody()->getContents();
        $cData = json_decode($cBody, true);
        extract($cData);
        return redirect('/proses');
    }
}
