<?php

namespace App\Http\Requests\cntt_admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class EditSlider extends FormRequest
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
            'txtTitle' => 'required',
            'txtIntro' => 'required',
            'txtContent' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required' => 'Vui lòng nhập tiêu đề slide',
            'txtIntro.required' => 'Vui lòng nhập nội dung tóm tắt slide',
            'txtContent.required' => 'Không sử dụng nội dung chi tiết slide',
        ];
    }
}
