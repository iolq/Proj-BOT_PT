<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|min:8', 
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        $username = $this->get('username');
        $password = $this->get('password');
        return $this->only('username', 'password');
    }
}
