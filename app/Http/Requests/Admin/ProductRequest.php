<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'product_name' => 'required|max:100',
            'product_price'=> 'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'product_quantity'=> 'required|numeric',
            'product_image' => 'reuired|image|mimes:jpeg,png,jpg|max:2048',
            'short_description' => 'reuired|max:500',
            'long_description'=> 'required|max:1000',
            'sub_category'=>'required|max:50',
            'status'=>'required|boolean'
        ];
    }
}
