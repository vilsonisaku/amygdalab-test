<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;

class LoginRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|min:3|max:100',
            'password' => 'required|string|min:6'
        ];
    }
}
