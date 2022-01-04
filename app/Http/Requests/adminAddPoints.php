<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddPoints extends FormRequest
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
            "min_amount" => 'required',
            "max_amount" => 'required',
            "point" => 'required',
        ];
    }
    public function messages()
    {
        return [
            "min_amount.required"=>"فیلد قیمت از خالی است",
            "max_amount.required"=>"فیلد قیمت تا خالی است",
            "point.required"=>"فیلد امتیاز خالی است",
        ];
    }
}
