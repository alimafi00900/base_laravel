<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminEditOrderReq extends FormRequest
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
            "amount"=>'required|max:300',
        ];
    }
    public function messages()
    {
        return [
            "amount.required"=>"فیلد قیمت خالی است ",
            "amount.max"=>"قیمت به درستی وارد نشده است",
        ];
    }
}
