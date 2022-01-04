<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddBranchReq extends FormRequest
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
            "name" => 'required|max:250',
            "display_name" => 'required|max:250',
        ];
    }
    public function messages()
    {
        return [
            "name.required"=>"فیلد نام خالی است",
            "display_name.required"=>"فیلد نام نمایشی خالی است",

        ];
    }
}
