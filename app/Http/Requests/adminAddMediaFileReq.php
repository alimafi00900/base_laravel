<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddMediaFileReq extends FormRequest
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
            "name" => 'max:100',
            "file" => 'required|image|mimes:jpeg,png,jpg,ico|max:20048',
        ];
    }
    public function messages()
    {
        return [
            "name.max"=>"طول نام بیش از حد مجاز است",
            "file.image"=>"فرمت فایل نادرست است",
            "file.mimes"=>"فرمت فایل نادرست است",

        ];
    }
}
