<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

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

  
}
