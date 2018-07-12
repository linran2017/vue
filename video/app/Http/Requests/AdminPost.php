<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Validator;
use Hash;

class AdminPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return Auth::guard('admin')->check();
    }

    /**
     * 增加原密码验证规则
     */
    public function addValidator(){
        Validator::extend('check_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value,Auth::guard('admin')->user()->password);
        });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 验证规则
     */
    public function rules()
    {
        //原密码验证规则
        $this->addValidator();
        return [
            'password'=>'sometimes|required|check_password',
            'newpassword'=>'sometimes|required|confirmed',
            'newpassword_confirmation'=>'sometimes|required'
        ];
    }

    /**
     * 中文提示
     */
     public function messages(){
        return [
            'password.required'=>'原密码不能为空',
            'password.check_password'=>'原密码输入错误',
            'newpassword.required'=>'新密码不能为空',
            'newpassword.confirmed'=>'两次密码不一致',
            'newpassword_confirmation.required'=>'确认密码不能为空'
        ];
    }
}
