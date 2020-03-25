<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request)
    {

        $request->merge(["owner"=>$request->getHost()]);

        $client = new Client();

        $client->request('POST', 'https://dengi-belarus.online/api/order/store', [
            'form_params' => $request->all(),
            'verify' => false
        ]);

        return response()->json(['status' => true]);
    }
}
