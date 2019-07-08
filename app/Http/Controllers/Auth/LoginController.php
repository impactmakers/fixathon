<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;

class LoginController extends Controller
{
    /*
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    */

    public function redirectToProvider()
    {
        //return Socialite::driver('makerlog')->redirect();
        return Socialite::with('makerlog')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('makerlog')->user();
        dd($user);


        // $user->token;
    }

    public function registerToEvent($token){
        $base_uri = env('MAKERLOG_URL');
        $endpoint = '/events/'.env('MAKERLOG_EVENT').'/join';
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $base_uri.$endpoint,[
        'headers' => [
                'Authorization' => 'Token '.$token
            ]
        ]);
    }
}
