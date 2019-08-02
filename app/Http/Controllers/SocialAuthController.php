<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;

use Socialite;
use Session;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver ( $service )->stateless()->redirect ();
    }

    public function callback(SocialAccountService $service, $provider) {
    	$user = Socialite::driver('makerlog')->stateless()->user();
        //$this->registerToEvent($user->token);

        $user = $service->createOrGetUser($user,$user->getEmail(),$user->getAvatar(),$user->token,$user->refreshToken);
        auth()->login($user);
    	                
        return redirect()->route('welcome');
    }

    public function registerToEvent($token){
    	try{
	        $base_uri = env('MAKERLOG_URL');
	        $endpoint = '/events/'.env('MAKERLOG_EVENT').'/join/';
	        
	        $client = new \GuzzleHttp\Client();
	        $response = $client->post($base_uri.$endpoint,[
	        	'headers' => [
	        		'Accept' => 'application/json',
		            'Authorization' => 'Bearer ' . $token,
		            'Content-Type' => 'application/json',
	            ]
	        ]);
	    }catch(Exception $e){
	    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	    }
    }
}
