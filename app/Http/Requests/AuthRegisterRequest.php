<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required',
        ];
    }
}
