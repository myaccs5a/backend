<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class RequestLanguage extends FormRequest
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
            'language'=>'required|unique:language,name_language',

        ];
    }
    public function messages()
    {
       return [
           'language.required'=>'Ngôn ngữ không được để trống!',
           'language.unique'=>'Ngôn ngữ đã bị trùng',
       ];
    }
}
