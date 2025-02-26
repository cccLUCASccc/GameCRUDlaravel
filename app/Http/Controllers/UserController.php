<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jeux;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function signIn(){
        $validate = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($validate)) {
            throw ValidationException::withMessages([
                'email' => 'The email and/or the password is invalid.'
            ]);
        }
        request()->session()->regenerate();
        return redirect()->route('Jeux');
    }

    public function SignUp(){
        $validate = request()->validate([
            'name' => ['required', 'min:3'],
            'prenom' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:100'],
            'password' => ['required', Password::min(5), 'confirmed'],
        ]);

        $user = User::create($validate);

        Auth::login($user);

        return redirect()->route('Jeux');
    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('Jeux');
    }

    public function index(){
        $user = User::where('email', Auth::user()->email)->first();
        $jeux = Jeux::where('createur_id', Auth::id())->get();

        return view('dashboard', ['user' => $user, 'jeux' => $jeux]);
    }
}
