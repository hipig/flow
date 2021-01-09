<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => [
                        'required',
                        Rule::unique('pages'),
                    ],
                ];
            case 'PUT':
                return [
                    'name' => [
                        'required',
                        Rule::unique('pages')->ignore($this->route('page')),
                    ],
                    'title' => 'required',
                    'content' => 'required',
                ];
        }
    }
}
