<?php

namespace App\Http\Requests\cntt_admin\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
            'txtTitle' => 'required|max:255',
            'txtIntro' => 'required',
            'txtContent' => 'required',
            'imgNews' => 'required | image',
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required' => 'Vui lòng nhập tiêu đề',
            'txtIntro.required' => 'Vui lòng nhập nội dung tóm tắt',
            'txtContent.required' => 'Vui lòng nhập nội dung chi tiết bài viết',
            'imgNews.required' => 'Hình ảnh bài viết chưa có',
            'imgNews.image' => 'Tập dữ liệu không phải là hình ảnh'
        ];
    }
}
