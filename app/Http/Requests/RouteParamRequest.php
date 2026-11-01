<?php

namespace App\Http\Requests;

use App\Models\MyModel;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RouteParamRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /**
         * @var MyModel|null $myModel
         */
        $myModel = $this->route("model");

        if ($myModel === null) {
            abort(404, "Model not found for validation");
        }

        return [
            'param_1' => ['int', 'max:' . $myModel->intProp]
        ];
    }
}
