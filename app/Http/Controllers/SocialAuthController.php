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

        session(['logged_in' => true]);
        session(['username' =>  $user->getNickname()]);
        session(['avatar' => $user->getAvatar()]);
        session(['user' => $user]);
        session::save();

        $this->registerToEvent($user->token);
                        
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
