<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|min:1|max:50:unique:users',
            'password' => 'required|min:8|/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@$%^*]).*$/',
            'passwordchk' => 'same:password',
            'name' => 'required|min:2|max:50|string',
            'agreed' => 'required|accepted',
        ];
    }
}
