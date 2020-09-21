<?php

namespace App\Http\Requests\AdminRequest;

use Illuminate\Foundation\Http\FormRequest;

class RequestZones extends FormRequest
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
            'zones_name'=>'required|unique:zones,name_zone',
        ];
    }
    public function messages()
    {
        return [
            'zones_name.required'=>'Khu vực không được để trống!',
            'zones_name.unique'=>'Khu vực đã bị trùng',
        ];
    }
}
