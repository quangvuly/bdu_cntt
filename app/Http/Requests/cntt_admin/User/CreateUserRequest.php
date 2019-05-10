<?php

namespace App\Http\Requests\cntt_admin\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'txtLastName' => 'required',
            'txtEmail' => 'required|unique:cnttuser,email',
            'txtPhoneNumber' => 'required|numeric',
            'txtPassword' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'txtLastName.required' => 'Vui lòng nhập Tên người dùng',
            'txtEmail.required' => 'Vui lòng nhập email liên hệ',
            'txtEmail.unique' => 'Email đã tồn tại. Vui lòng sử dụng email khác',
            'txtPassword.required' => 'Vui lòng nhập mật khẩu',
            'txtPhoneNumber.required' => 'Vui lòng nhập số điện thoại',
            'txtPhoneNumber.numeric' => 'Không sử dụng ký tự chữ tại nội dung thông tin số điện thoại',
        ];
    }
}
