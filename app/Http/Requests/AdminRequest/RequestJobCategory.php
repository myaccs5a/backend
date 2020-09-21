<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class RequestJobCategory extends FormRequest
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
            'job_category'=>'required|unique:job_categories,job_category_name',
        ];
    }
    public function messages()
    {
        return [
            'job_category.required'=>'Ngành nghề không được để trống!',
            'job_category.unique'=>'Ngành nghề đã bị trùng',
        ];
    }
}
