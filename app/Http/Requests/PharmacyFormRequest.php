<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyFormRequest extends FormRequest
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
            'logo' =>[
                'file',
            ],
            'address' =>[
                'required',
                'string',
                'max:200',
            ],
            'latitude' =>[
                'required',
                'string',
                'max:200',
            ],
            'longitude' =>[
                'required',
                'string',
                'max:200',
            ],
            'open_time' => [
                'required',
                'string'
            ],
            'close_time' => [
                'required',
                'string'
            ]
        ];

        return $rules;
    }
}
