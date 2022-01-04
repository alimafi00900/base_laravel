<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminAddMostAskedQuestions extends FormRequest
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
            "title" => 'required',
            "content" => 'required',
            "status" => 'required',
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"فیلد عنوان خالی است",
            "content.required"=>"فیلد محتوا خالی است",
            "status.required"=>"وضعیت نادرست انتخاب شده است",
        ];
    }
}
