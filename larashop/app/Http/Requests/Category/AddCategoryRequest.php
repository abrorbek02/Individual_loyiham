<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name' => 'required|string|min:6|max:12|unique:categories'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kategoriya nomi talab qilinadi',
            'name.string' => 'Turkum nomi qator bolishi kerak',
            'name.min' => 'Turkum nomi kamida 6 ta belgidan iborat boʻlishi kerak',
            'name.max' => 'Turkum nomi 12 belgidan oshmasligi kerak',
        ];
    }
}
