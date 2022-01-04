<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userUpdateInfos extends FormRequest
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
            "firstName"=>'required|max:300',
            "lastName"=>'required|max:300',
            "user_login"=>'required|max:300',
            "user_email"=>'required|email|max:300',
            "display_name"=>'required|max:300',
        ];
    }
    public function messages()
    {
        return [
            "firstName.required"=>"نام وارد نشده است ",
            "lastName.required"=>"نام خانوادگی وارد نشده است ",
            "user_login.required"=>"شماره همراه وارد نشده است ",
            "user_email.required"=>"ایمیل وارد نشده است ",
            "display_name.required"=>"نام نمایشی وارد نشده است ",
        ];
    }
}
