<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminMenuManagement extends FormRequest
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
            "indexNumber" => 'required|max:191',
            "name" => 'required|max:191',
        ];
    }
    public function messages()
    {
        return [
            "indexNumber.required"=>"فیلد شماره ردیف خالی است",
            "indexNumber.max" => "شماره ردیف به درستی وارد نشده است",
            "name.required"=>"فیلد نام خالی است",
            "name.max"=>"نام به درستی وارد نشده است",
        ];
    }
}
