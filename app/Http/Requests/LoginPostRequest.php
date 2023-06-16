<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'min:2', 'max:50', 'email'],
            'passwd' => ['required', 'min:8', 'max:50']
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'EL email es requerido',
            'email.min' => 'El email debe tener mas de 2 caracteres',
            'email.max' => 'El email debe tener maximo 30 caracteres',
            'email.email' => 'Ingrese un Email valido',
            'passwd.min' => 'El Password debe tener mas de 8 caracteres',
            'passwd.max' => 'El password debe tener menos de 50 caracteres',
            'passwd.required' => 'El password es requerido'
        ];
    }
}
