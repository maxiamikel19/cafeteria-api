<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {

        $dados = $request->validated();

        $user = User::create([
            'name' => $dados['name'],
            'telefone' => $dados['telefone'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]);
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function login(LoginRequest $request)
    {
        $dados = $request->validated();
        if(!Auth::attempt($dados))
        {
            return response([
                'errors' => ['Email ou senha incorreto']
            ], 422);
        }

        $user = Auth::user();
        return ([
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        
        return [
            'user' => null
        ];
    }

  
}
