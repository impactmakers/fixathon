<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function redirectToProvider()
    {
        //return Socialite::driver('makerlog')->redirect();
        return Socialite::with('makerlog')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('makerlog')->stateless()->user();
        $token = $user->token;
        
        echo "Token: ".$token;
        echo "<pre>User:";var_dump($user);echo "</pre>";

        //$user = Socialite::driver('makerlog')->userFromToken($token);
        dd($user);
        

        return view ( 'landing' )->withDetails ( $user )->withService ( 'makerlog' );
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