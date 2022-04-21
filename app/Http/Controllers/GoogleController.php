<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    
    // Google login
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function callbackFromGoogle()
    {
       
        $user = Socialite::driver('google')->user();
        $is_user = User::where('email', $user->getEmail())->first();
        

        if (!$is_user) {
            $is_user = User::create([
                'google_id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                'password' => Hash::make($user->getName().'@'.$user->getId()),
            ]);
            
        }else{
            $is_user->google_id = $user->getId();
            $is_user->avatar = $user->getAvatar();
            $is_user->save();
        }
        Auth::login($is_user);


        // Return home after login
        return redirect()->route('dic.home');
    }
}
