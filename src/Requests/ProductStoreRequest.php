<?php

namespace Ecoflow\Shop\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'desc' => 'sometimes|nullable',
            'price' => 'sometimes|nullable',
            'discount' => 'sometimes|nullable',
            'qt' => 'sometimes|nullable',
            'hot' => 'sometimes|nullable|boolean',
            'options' => 'sometimes|nullable',
            'type_id' => 'sometimes|nullable',
            'unit_id' => 'sometimes|nullable',
            'active' => 'sometimes|nullable',
        ];
    }
}
