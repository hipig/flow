<?php

namespace App\Http\Requests;

class SettingRequest extends FormRequest
{
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
