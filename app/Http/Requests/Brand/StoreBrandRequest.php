<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:1',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website' => 'nullable|max:255|min:1',
            'phone_number' => 'nullable|max:255|min:1',
            'email' => 'nullable|string|max:255|min:1',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The brand name is required',
            'name.string' => 'The brand name must be a string',
            'name.max' => 'The brand name must be a maximum of 255 characters',
            'name.min' => 'The brand name must be a minimum of 1 characters',
            'logo.image' => 'The logo must be an image',
            'logo.mimes' => 'The logo must be a file of type: jpeg, png, jpg, gif, svg',
            'logo.max' => 'The logo may not be greater than 2048 kilobytes',
            'website.max' => 'The website must be a maximum of 255 characters',
            'website.min' => 'The website must be a minimum of 1 characters',
            'phone_number.max' => 'The phone number must be a maximum of 255 characters',
            'phone_number.min' => 'The phone number must be a minimum of 1 characters',
            'email.string' => 'The email must be a string',
            'email.max' => 'The email must be a maximum of 255 characters',
            'email.min' => 'The email must be a minimum of 1 characters',
        ];
    }
}
