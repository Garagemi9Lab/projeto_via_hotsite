<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    
    public function rules(){
        return [
            'email' => 'required|email|unique:cadastros,email',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Email inválido!',
            'email.unique' => 'Email já cadastrado!',
        ];
    }
}
