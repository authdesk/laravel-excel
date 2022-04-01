<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'product_name' => "required",
            'product_brand' => "required",
            'product_price' => "required",
            'product_processor' => "required",
            'product_ram' => "required",
            'product_storage' => "required",
            'product_screen' => "required",
            'status' => "required",
        ];
    }
}
