<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'min:3'
            ],
            'email' => [
                'required',
                'email'
            ],
            'current_password' => [
                'nullable',
                'current_password '
            ],
            'new_password' => [
                'nullable',
                \Illuminate\Validation\Rules\Password::default()->numbers()->letters(),
                'confirmed'
            ]
        ];
    }
}
