<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegisterReq extends FormRequest
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
            "name"=>'required|max:300',
            "phoneNumber"=>'required|max:300',
        ];
    }
    public function messages()
    {
        return [
            "name.required"=>"نام و نام خانوادگی وارد نشده است ",
            "phoneNumber.required"=>"شماره همراه وارد نشده است ",
        ];
    }
}
