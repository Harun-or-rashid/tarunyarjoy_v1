<?php

namespace App\Http\Controllers;


use Str;
use Hash;
use Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
//use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function LoginProcess(Request $request)
    {

        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (auth()->attempt($data)) {
            return redirect('/f');
        } else {

            return redirect()->back();
        }
    }

    public function Showlogin()
    {
        return view('backend.user.login');
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    public function githubRedirect()
    {
        $user = Socialite::driver('github')->user();
        $data = ([
            'email' => $user->email,
            'password' => $user->nickname,
        ]);
        if (!Auth()->attempt($data))
            $users = User::firstOrCreate([
                'email' => $user->email,
                'name' => $user->nickname,
                'image' => Str::random(24),
                'phone' => $user->id,
                'role' => 1,
                'password' => bcrypt($user->nickname)
            ]);
        if (Auth()->attempt($data)) {
            return redirect('/events/create');
        }

        //        dd($data);
        elseif (Auth()->attempt($data)) {
            return redirect('/events/create');
        } else {

            return redirect()->back();
        }
    }
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect()
    {
        $user = Socialite::driver('facebook')->user();

        $data = ([
            'email' => $user->email,
            'password' => $user->id,
        ]);

        if (!auth()->attempt($data)) {
            $users = User::firstOrCreate([
                'email' => $user->email,
                'name' => $user->name,
                'image' => Str::random(24),
                'phone' => $user->id,
                'role' => 1,
                'password' => bcrypt($user->id)
            ]);
            if (auth()->attempt($data)) {
                return redirect('/events/create');
            }
        } elseif (auth()->attempt($data)) {
            return redirect('/events/create');
        } else {

            return redirect()->back();
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
