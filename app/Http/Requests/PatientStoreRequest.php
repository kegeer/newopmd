<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|unique:patients',
            'name' => 'required',
            'card_id' => 'required|digits:13|unique:patients',
            'case_number' => 'required|unique:patients'
        ];
    }

    public function messages()
    {
        return [
            'number.required' => '需要填写患者编号',
            'name.required' => '需要填写名字',
            'card_id.required' => '需要填写身份证号',
            'case_number.required' => '需要填写病例号',
            'number.unique' => '已存在相同患者编号',
            'card_id.unique' => '已存在相同身份证号',
            'case_number.unique' => '已存在相同病例号'
        ];
    }
}
