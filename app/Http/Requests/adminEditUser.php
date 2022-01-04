<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminEditUser extends FormRequest
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
            "display_name" => 'required|max:100',
            "user_login" => 'required|max:100',
        ];
    }
    public function messages()
    {
        return [
            "display_name.required"=>"فیلد نام خالی است",
            "display_name.max"=>"نام به درستی وارد نشده است",
            "user_login.required"=>"فیلد شماره تلفن خالی است",
            "user_login.max"=>" شماره تلفن به درستی وارد نشده است",
        ];
    }
}
