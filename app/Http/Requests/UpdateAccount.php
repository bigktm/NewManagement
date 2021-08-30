<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccount extends FormRequest
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
            'customer_name'=>'required|max:50',
            'customer_email'=>'required|email',
            'customer_password' => 'required',
            'password' => 'confirmed',
            'customer_phone' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'min' => ':attribute tối thiểu phải có 6 ký tự',
            'max' => ':attribute tối đa chỉ 50 ký tự',
            'confirmed' => ':attribute lặp lại chưa đúng',
        ];
    }
    public function attributes()
    {
        return [
            'customer_name' => 'Tên đăng nhập',
            'customer_email' => 'Email',
            'password' => 'Mật Khẩu',
            'customer_password' => 'Mật khẩu',
            'customer_phone' => 'Số điện thoại',
        ];
    }
}
