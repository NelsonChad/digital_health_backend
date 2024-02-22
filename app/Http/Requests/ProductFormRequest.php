<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' =>[
                'required',
                'string',
                'max:200',
            ],
            'image' =>[
                'file',
                function ($attribute, $value, $fail) {
                    if ($value->getClientOriginalExtension() !== 'png' || $value->getClientMimeType() !== 'image/png') {
                        $fail('The ' . $attribute . ' field must be a file of type: png.');
                    }
                },
            ],
            'code' =>[
                'required',
                'string',
                'max:200',
            ],
            'price' =>[
                'required',
                'numeric',
                'regex:/^\d+(\.\d{1,2})?$/'
            ],
            'description' =>[
                'required',
            ],
            'brand_id' =>[
                'required'
            ],
            'category_id' =>[],
            'pharmacy_id'=>[]
        ];

        return $rules;
    }
}
