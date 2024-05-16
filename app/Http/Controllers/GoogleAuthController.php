<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Throwable;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try{
            // $google_user = Socialite::driver('google')->user();
            
            $google_user = Socialite::driver('google')->user();
 
            $user = User::updateOrCreate([
                'google_id' => $google_user->id,
            ], [
                'name' => $google_user->name,
                'email' => $google_user->email,
                'google_token' => $google_user->token,
                'google_refresh_token' => $google_user->refreshToken,
            ]);
        
            Auth::login($user);
        
            return redirect('/');
            // $user = User::where('google_id', $google_user->getId())->first();
            
            // if(!$user)
            // {
                
            //     $new_user = User::create([
            //         'name' => $google_user->getName(),
            //         'email' => $google_user->getEmail(),
            //         'google_id' => $google_user->getId(),
                    
            //     ]);

            //     if($new_user){

            //         Auth::login($new_user);
    
            //         return redirect()->intended('/');
            //     }
            //     else{
            //         return redirect()->back()->with('error','Naya user banauda err ao');
            //     }

            // }
            // else{
            //     // Auth::login($google_user);

            //     return redirect()->intended('/register');
            // }
        }
        catch(Throwable $th){
            dd('sth went wrong'.$th->getMessage());
        }
    }
}
