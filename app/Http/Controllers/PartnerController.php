<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function index()
    {
        return view('mitra.gabungmitra', [
            "title" => "Gabung Mitra"
        ]);
    }

    public function store(Request $request)
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);

        $aResponse = $client->request('POST', "http://localhost:5000/api/user/partner", ['multipart' => [
            [
                'name' => 'partner_name',
                'contents' => $request->partnername
            ],

            [
                'name' => 'email',
                'contents' => $request->email
            ],

            [
                'name' => 'phone_number',
                'contents' => $request->nophone
            ],

            [
                'name' => 'avatar',
                'contents' => fopen($request->file('avatar'), 'r'),
                'filename' => $request->file('avatar')->getClientOriginalName(),
                'Mime-Type' => $request->file('avatar')->getmimeType()
            ],

            [
                'name' => 'address',
                'contents' => $request->address
            ],

            [
                'name' => 'description',
                'contents' => $request->desc
            ],

            [
                'name' => 'category_id',
                'contents' => $request->category
            ],
        ]]);
        $aBody = $aResponse->getBody()->getContents();
        $aData = json_decode($aBody, true);
        extract($aData);

        //$sesi = session()->put('role', 1);
        return redirect('/statusmitra');
    }

    public function mypartner()
    {
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);
        $uResponse = $client->request('GET', "http://localhost:5000/api/user/partner/you");
        $uBody = $uResponse->getBody()->getContents();
        $uData = json_decode($uBody, true);
        extract($uData);
        if ($uData['partner']['request_status'] == 1) {
            session()->put('partner', $uData['partner']['id']);
            return view('mitra.dashboard.index');
        }
        // return response()->json($uData);
        return view('mitra.statusmitra', ['title' => 'Informasi Mitra', 'partner' => $uData['partner']]);
    }
    function OperationalStatusUpdate(Request $request)
    {
        // dd($request->operational_status);
        $client = new Client(['headers' => [
            'Authorization' => 'Bearer ' . session('token')
        ]]);

        $validatedData = $request->validate([
            'operational_status' => 'required|in:0,1',
        ]);
        if ($validatedData['operational_status'] == 0) {
            $validatedData['operational_status'] = 1;
        } else {
            $validatedData['operational_status'] = 0;
        }
        // dd($validatedData);

        $aResponse = $client->request('POST', "http://localhost:5000/api/user/partner/update", [
            'form_params' => $validatedData,
        ]);

        //$sesi = session()->put('role', 1);
        return redirect('/dashboard/profile');
    }
}
