<?php

namespace App\Http\Requests\cntt_admin\Contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'txtContactBase' => 'required',
            'txtContactAddress' => 'required',
            'txtContactCity' => 'required',
            'txtContactPhoneNo1' => 'required',
            'txtContactEmail' => 'required',
            'txtContactWebsite' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'txtContactBase.required' => 'Vui lòng nhập tên cơ sở',
            'txtContactAddress.required' => 'Vui lòng nhập địa chỉ cơ sở',
            'txtContactCity.required' => 'Vui lòng nhập tỉnh hoặc thành phố',
            'txtContactPhoneNo1.required' => 'Vui lòng nhập số điện thoại liên hệ',
            'txtContactEmail.required' => 'Vui lòng nhập email liên hệ',
            'txtContactWebsite.required' => 'Vui lòng nhập thông tin website',
        ];
    }
}
