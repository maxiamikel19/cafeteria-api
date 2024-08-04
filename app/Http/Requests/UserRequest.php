<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'unique:users', 'email'],
            'name' => ['required', 'string'],
            'telefone' => ['required'],
            'password' => ['required','min:4','confirmed']
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O email é requerido',
            'email.unique' => 'O email já foi cadastrado',
            'email.email' => 'O email não é válido',
            'name.required' =>  'O nome é requerido',
            'email.nome' => 'O nome deve ser um string',
            'telefone.required' =>  'O telefone é  requerido',
            'password.required' => 'A senha é requerida',
            'password.confirmed' => 'As senhas sao diferentes',
            'password.nim' => 'A senha deve ter no minimo :min caracteres'
        ];
    }
}
