<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category' => 'required|unique:categories,category',
            'publication_status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'category.required' => 'Category Unique',
            'publication_status.required' =>'Publication Require'
        ];
    }
}
