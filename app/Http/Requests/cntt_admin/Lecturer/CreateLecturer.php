<?php

namespace App\Http\Requests\cntt_admin\Lecturer;

use Illuminate\Foundation\Http\FormRequest;

class CreateLecturer extends FormRequest
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
            'txtFullName' => 'required',
            'txtPosition' => 'required',
            'imgLecturer' => 'required',
            'txtContent' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtFullName.required' => 'Vui lòng nhập tên đầy đủ của giảng viên',
            'txtPosition.required' => 'Vui lòng nhập chức vụ của giảng viên',
            'imgLecturer.required' => 'Vui lòng tải lên hình ảnh đại diện của giảng viên',
            'txtContent.required' => 'Vui lòng nhập mô tả về giảng viên',
        ];
    }
}
