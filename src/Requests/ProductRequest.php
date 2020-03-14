<?php

namespace Ecoflow\Shop\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:191',
            'desc' => 'nullable',
            'img_path' => 'nullable',
            'qt' => 'nullable',
            'price' => 'nullable',
            'in_stock' => 'nullable',
            'categories' => 'nullable'
        ];
    }
}
