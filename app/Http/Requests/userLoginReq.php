<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userLoginReq extends FormRequest
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
            "phoneNumber"=>'required|max:300',
        ];
    }
    public function messages()
    {
        return [
            "phoneNumber.required"=>"شماره همراه  وارد نشده است ",
            "phoneNumber.max"=>"شماره همراه به درستی وارد نشده است",
        ];
    }
}
