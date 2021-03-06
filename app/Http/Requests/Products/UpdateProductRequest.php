<?php

namespace App\Http\Requests\Products;

use App\Abstracts\ApiRequest;

class UpdateProductRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }
}
