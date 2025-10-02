<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            /** @format H:i */
            'my_param' => ['required', 'string', 'date_format:H:i']
        ];
    }
}
