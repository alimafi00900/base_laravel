<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminLoginReq extends FormRequest
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
            "email" => 'required|email|max:100',
            "password" => 'required|min:8|max:100',
        ];
    }
    public function messages()
    {
        return [
            "email.required"=>"فیلد ایمیل خالی است",
            "email.email"=>"ایمیل به درستی وارد نشده است",
            "email.max" => "ایمیل به درستی وارد نشده است",
            "password.required"=>"فیلد پسورد خالی است",
            "password.min"=>"طول پسورد نباید کمتر از 8 کاراکتر باشد",
            "password.max"=>"پسورد به درستی وارد نشده است",

        ];
    }
}
