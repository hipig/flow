<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'label' => 'required',
            'key' => 'required|alpha_dash',
            'group' => 'required',
            'type' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'label' => '名称',
            'key' => '标识',
            'group' => '分组',
            'type' => '类型',
        ];
    }
}
