<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Concerns\InteractsWithInput\only;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\State;
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

    }

    public function select_state(){
        $data['states'] = State::all();
        return view('auth.select-state', $data);
    }

    public function select_state_action(Request $request){
        $data = $request->only(['state']);
        // Verificacao de Seguranca
        $stateRegister = State::find($data['state']);
        //  Se nao houver registro
        if(!$stateRegister){
            //  Vai redirecionar para /login
            return redirect('/login');
        }
        // Se tiver o usuario
        $user = Auth::user();
        $user->state_id = $stateRegister->id;
        //  Vai salvar 
        $user->save();
        //  Vai redirecionar para a home
        return redirect()->route('home');
    }
}

