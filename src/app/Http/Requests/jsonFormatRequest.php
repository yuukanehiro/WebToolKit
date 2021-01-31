<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JsonFormatRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'json' => [
                'required',
                'array',
            ],
        ];
    }

    protected function validationData()
    {
        return array_merge($this->request->all(), [
            'json' => $this->json,
        ]);
    }
}
