<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupliersFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'supplier_name'=>[
                'required',
                'string',
                'max:200'
            ],
            'contact'=>[
                'required',
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
}
