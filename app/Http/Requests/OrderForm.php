<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderForm extends FormRequest
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
            'name' => 'required|max:30',
            'phone' => 'size:11',
            'email' => 'required|email',
            'address' => 'string|required',
            'description' => 'nullable|string',
        ];
    }
}
