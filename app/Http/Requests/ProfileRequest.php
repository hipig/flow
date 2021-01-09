<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore(auth()->id()),
            ],
            'password' => 'sometimes|confirmed',
        ];
    }
}
