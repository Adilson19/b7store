<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request){
        //  Criando usuario == Recebendo os dados da request
        $userData = $request->only(['name', 'email', 'password']);
        //  Criptografando a senha do usuario
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);
        return redirect()->route('select-state');
        dd($user);

    }

    public function state_action(Request $request){
        dd($request);
    }
}
