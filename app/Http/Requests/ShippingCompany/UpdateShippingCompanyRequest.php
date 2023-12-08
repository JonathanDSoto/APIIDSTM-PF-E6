<?php

namespace App\Http\Requests\ShippingCompany;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShippingCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: Implement authorize() method.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'website' => 'required|string|min:3|max:255',
            'phone' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser una cadena de caracteres',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener máximo 255 caracteres',
            'website.required' => 'El sitio web es requerido',
            'website.string' => 'El sitio web debe ser una cadena de caracteres',
            'website.min' => 'El sitio web debe tener al menos 3 caracteres',
            'website.max' => 'El sitio web debe tener máximo 255 caracteres',
            'phone.required' => 'El teléfono es requerido',
            'phone.string' => 'El teléfono debe ser una cadena de caracteres',
            'phone.min' => 'El teléfono debe tener al menos 3 caracteres',
            'phone.max' => 'El teléfono debe tener máximo 255 caracteres',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico debe ser una dirección de correo electrónico válida',
            'email.min' => 'El correo electrónico debe tener al menos 3 caracteres',
            'email.max' => 'El correo electrónico debe tener máximo 255 caracteres',
        ];
    }
}
