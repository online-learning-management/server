<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'string',
            'email' => 'string|email|unique:users',
            'date_of_birth' => 'date',
            'gender' => 'string',
            'username' => 'string|unique:users',
            'major_id' => 'numeric'
        ];
    }
}
