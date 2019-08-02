<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('landing');
    }

    public function welcome(Request $request){

        if(!Auth::check()){
            return redirect()->to('/redirect/makerlog');
        }

        return view('welcome');
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

    public function participants($page = 0){
        $offset = '';
        if($page !== 0){
            $offset = "/?limit=20&offset=".($page*20);
        }

        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/events/'.env('MAKERLOG_EVENT').'/participants'.$offset;
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.env('MAKERLOG_TOKEN')
            ]
        ]);

        echo $response->getBody();
    }

    public function products($page = 0){
        $offset = '';
        if($page !== 0){
            $offset = "/?limit=20&offset=".($page*20);
        }

        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/events/'.env('MAKERLOG_EVENT').'/products'.$offset;
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.env('MAKERLOG_TOKEN')
            ]
        ]);

        echo $response->getBody();   
    }

    public function teamMembers($product){
        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/products/'.strtolower($product).'/people/';
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.env('MAKERLOG_TOKEN')
            ]
        ]);

        echo $response->getBody();   
    }
}
