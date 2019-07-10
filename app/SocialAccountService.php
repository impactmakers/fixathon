<?php
namespace App;

use Laravel\Socialite\Contracts\Provider;

class SocialAccountService
{
    public function createOrGetUser($user,$email,$avatar,$token,$refreshToken) //Provider $provider)
    {
        $providerUser = $user;
        $providerName = 'makerlog'; 

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            //$email = $providerUser->getEmail();
            if($email === null || $email === ''){
                $email = $providerUser->getNickname()."@fakemail.com";
            }

            $user = User::whereEmail($email)->first();

            if (!$user) {
                $user = User::create([
                    'email' => $email,
                    'name' => $providerUser->getNickname(),
                    'avatar' => $avatar,
                    'token' => $token,
                    'refreshToken' => $refreshToken
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }

    }
}
