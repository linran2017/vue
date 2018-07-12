<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'title'=>'sometimes|required',
            'introduce'=>'sometimes|required',
            'preview'=>'sometimes|required'
        ];
    }

    /**
     * 中文提示
     */
    public function messages(){
        return [
            'title.required'=>'课程名称不能为空',
            'introduce.required'=>'介绍不能为空',
            'preview.required'=>'上传图片不能为空'
        ];
    }
}
