<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'category_id' => [
                'required',
                Rule::in(Category::query()->pluck('id'))
            ],
        ];
    }
}
