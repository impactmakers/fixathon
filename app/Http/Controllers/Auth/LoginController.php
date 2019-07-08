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
}
