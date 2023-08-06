<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class adminAddAdminUser extends FormRequest
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
    public function rules(Request $request)
    {
        $out =[
             "name"=>'required|max:255',
             "role"=>'required|max:255',
             "phone_number"=>'required|max:255',
             "status"=>'required|max:255',
             "email"=>'required|email|max:255',
             "password"=>'required|max:255',
        ];

        if(str_contains($request->getRequestUri(),"/edit-submit/")){
            updateProperty($out,["password"=>'max:255']);
        }
        return $out;
    }
    public function messages()
    {
        return [
            'name.required'=>"نام وارد نشده است",
            'role.required'=>"نقش وارد نشده است",
            'phone_number.required'=>"شماره همراه وارد نشده است",
            'email.required'=>"ایمیل وارد نشده است",
            'email.email'=>"ایمیل به درستی وارد است",
            'password.required'=>"پسورد وارد نشده است",
        ];
    }
}
