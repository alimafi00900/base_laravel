<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddProductReq extends FormRequest
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
            "file" => 'image|mimes:jpeg,png,jpg,ico|max:20048',
            "status" => 'required|max:100',
            "price"=>'required|max:300',
            "product_categories"=>'required|max:300',

        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"فیلد عنوان خالی است",
            "title.max"=>"طول عنوان بیش از حد مجاز است",
            "file.image"=>"فرمت فایل نادرست است",
            "file.mimes"=>"فرمت فایل نادرست است",
            "price.required"=>"فیلد قیمت خالی است ",
            "price.max"=>"قیمت به درستی وارد نشده است",
        ];
    }
}
