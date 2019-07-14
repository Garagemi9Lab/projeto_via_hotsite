<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeedRequest extends FormRequest
{
    public function authorize(){
        return true;
    }
    
    public function rules(){
        return [
            'name' => 'required',
            'email' => 'required|email|unique:leeds,email',
            'empresa' => 'required',
            'celular' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nome é obrigatório!',
            'email.required' => 'Email é obrigatório!',
            'email.email' => 'Email inválido!',
            'email.unique' => 'Email já cadastrado!',
            'empresa.required'  => 'Empresa é obrigatório!',
            'celular.required'  => 'Celular é obrigatório!',            
        ];
    }
}