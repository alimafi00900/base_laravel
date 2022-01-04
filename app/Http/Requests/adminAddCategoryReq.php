<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddCategoryReq extends FormRequest
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
            "title" => 'required|max:100',
            "status" => 'required|max:100',
            "branches" => 'required|max:100',
            "file" => 'image|mimes:jpeg,png,jpg,ico|max:20048',
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"فیلد عنوان خالی است",
            "branches.required"=>"فیلد شاخه خالی است",
            "title.max"=>"طول عنوان بیش از حد مجاز است",
            "file.image"=>"فرمت فایل نادرست است",
            "file.mimes"=>"فرمت فایل نادرست است",

        ];
    }
}
