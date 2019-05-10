<?php

namespace App\Http\Requests\cntt_admin\Cate;

use Illuminate\Foundation\Http\FormRequest;

class CreateCateRequest extends FormRequest
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
            'txtCateName' => 'required| max:255',
        ];
    }

    public function messages()
    {
        return [
            'txtCateName.required' => 'Vui lòng nhập danh mục',
        ];
    }
}
