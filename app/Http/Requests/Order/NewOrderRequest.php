<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class NewOrderRequest extends FormRequest
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
            'item_weight' => 'required|numeric|min:0.1',
            'mode' => 'required|in:air,sea',
            'country_of_origin' => 'required'
        ];
    }
}
