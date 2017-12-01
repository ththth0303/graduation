<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|unique:users|max:255|email',
            'name' => 'required',
            'password' => 'required|min:6',
            'avatar' => 'image',
            'birthday' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Định dạng email không chính xác',
            'email.unique' => 'Email đã tồn tại',
            'name.required' => 'Họ tên không được để trống',
            'avatar.image' => 'Ảnh đại diện không đúng định dạng',
            'birthday.date' => 'Định dạng ngày sinh không đúng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
        ];
    }
}
