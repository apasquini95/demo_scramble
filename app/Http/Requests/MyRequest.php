<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'my_param' => ['required', 'string', 'date_format:H:i']
        ];
    }
}
