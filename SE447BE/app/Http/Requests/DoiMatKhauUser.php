<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoiMatKhauUser extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'password'      => 'required|min:6|max:50',
            're_password'   => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'password'      => 'Mật khẩu phải từ 6 ký tự trở lên!',
            're_password'   => 'Mật khẩu nhập lại không trùng khớp!',
        ];
    }
}
