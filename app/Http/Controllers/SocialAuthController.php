<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;

use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver ( $service )->stateless()->redirect ();
    }

    public function callback(SocialAccountService $service, $provider) {

    	$user = Socialite::driver('makerlog')->stateless()->user();
        $this->registerToEvent($user->token);
        
        Session::put('logged_in', true);
        Session::put('username',$user->getNickname());
        Session::put('avatar', $user->getAvatar());
        Session::put('user', $user);
                
        return view ( 'welcome', [
        	'user' => $user, 
        ]);
    	
    	/*
    	$user = $service->createOrGetUser(Socialite::driver($provider));
    	auth()->login($user);
    	return redirect()->to('/');
    	*/
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
