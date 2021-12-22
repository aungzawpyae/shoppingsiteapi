<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'nullable|required',
            'details' => 'nullable|required',
            'price' => 'nullable|required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
}
