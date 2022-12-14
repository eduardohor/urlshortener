<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:80',
                'min:5'
            ],
            'email' => 'required',
            'password' => [
                'required',
                'min:8',
                'max:12'
            ],
            'photo' => [
                'nullable',
                'image',
                'max:1024',
            ],
        ];
        return $rules;
    }
}