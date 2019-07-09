<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function event(){
        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/events/'.env('MAKERLOG_EVENT');
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.env('MAKERLOG_TOKEN')
            ]
        ]);

        echo $response->getBody();
    }

    public function participants(){
        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/events/'.env('MAKERLOG_EVENT').'/participants';
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.env('MAKERLOG_TOKEN')
            ]
        ]);

        echo $response->getBody();
    }
}
