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
        return Socialite::driver ( $service )->redirect ();
    }

    public function callback(SocialAccountService $service, $provider) {
    	/*
        $token = $user->token;        
        echo "Token: ".$token;
        echo "<pre>User:";var_dump($user);echo "</pre>";
        $user = Socialite::driver('makerlog')->userFromToken($user->token);
        */

        $code = $_GET['code'];

		$base_uri = env('MAKERLOG_URL');
        $endpoint = '/oauth/token/';
        $params = 'grant_type=authorization_code&code='.$code.'&redirect_uri='.env("MAKERLOG_REDIRECT_URI");

        //&client_id='.env("MAKERLOG_CLIENT_ID").'&client_secret='.env("MAKERLOG_CLIENT_SECRET")
        $credentials = base64_encode(env("MAKERLOG_CLIENT_ID").':'.env("MAKERLOG_CLIENT_SECRET"));

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $base_uri.$endpoint.$params,[
        	'headers' => [
            	'Authorization' => "Basic $credentials"
        	]
    	]);


        echo $response->getBody();

        dd(true);

    	$user = Socialite::driver('makerlog',$config)->user();
        dd($user);
        
        return view ( 'landing' )->withDetails ( $user )->withService ( 'makerlog' );
    	
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
