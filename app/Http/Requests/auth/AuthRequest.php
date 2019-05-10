<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtEmail' => 'required',
            'txtPass' => 'required'
        ];
    }

    public function messages() {
        return [
            'txtEmail.required' => 'Vui long nhập email', 
            'txtPass.required' => 'Vui long nhập password', 
        ];
    }
}
