<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JsonFormatRequest extends FormRequest
{
    /**
     * 認証関係の判定の記述
     * 特にない場合はtrue
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
            'json' => [
                'required',
                'string',
            ],
        ];
    }

    public function messages()
    {
        return [
            'json' => 'JSON形式で入力してください',
        ];
    }
}
