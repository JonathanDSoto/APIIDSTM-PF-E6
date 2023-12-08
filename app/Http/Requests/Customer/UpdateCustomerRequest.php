<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $customer = $this->route('customer');

        return [
            'name' => 'required|string|max:255|min:1',
            'last_name' => 'required|string|max:255|min:1',
            'email' => 'required|string|max:255|min:1|unique:customers,email,' . $customer->id,
            'phone_number' => 'nullable|string|max:255|min:1',
            'country' => 'nullable|string|max:255|min:1',
            'state' => 'nullable|string|max:255|min:1',
            'city' => 'nullable|string|max:255|min:1',
            'zip_code' => 'nullable|string|max:255|min:1',
            'address_line_1' => 'nullable|string|max:255|min:1',
            'address_line_2' => 'nullable|string|max:255|min:1',
            'address_line_3' => 'nullable|string|max:255|min:1',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'name.required' => 'The customer name is required',
            'name.string' => 'The customer name must be a string',
            'name.max' => 'The customer name must be a maximum of 255 characters',
            'name.min' => 'The customer name must be a minimum of 1 characters',
            'last_name.required' => 'The customer last name is required',
            'last_name.string' => 'The customer last name must be a string',
            'last_name.max' => 'The customer last name must be a maximum of 255 characters',
            'last_name.min' => 'The customer last name must be a minimum of 1 characters',
            'email.required' => 'The customer email is required',
            'email.string' => 'The customer email must be a string',
            'email.max' => 'The customer email must be a maximum of 255 characters',
            'email.min' => 'The customer email must be a minimum of 1 characters',
            'email.unique' => 'The customer email must be unique',
            'phone_number.string' => 'The customer phone number must be a string',
            'phone_number.max' => 'The customer phone number must be a maximum of 255 characters',
            'phone_number.min' => 'The customer phone number must be a minimum of 1 characters',
            'country.string' => 'The customer country must be a string',
            'country.max' => 'The customer country must be a maximum of 255 characters',
            'country.min' => 'The customer country must be a minimum of 1 characters',
            'state.string' => 'The customer state must be a string',
            'state.max' => 'The customer state must be a maximum of 255 characters',
            'state.min' => 'The customer state must be a minimum of 1 characters',
            'city.string' => 'The customer city must be a string',
            'city.max' => 'The customer city must be a maximum of 255 characters',
            'city.min' => 'The customer city must be a minimum of 1 characters',
            'zip_code.string' => 'The customer zip code must be a string',
            'zip_code.max' => 'The customer zip code must be a maximum of 255 characters',
            'zip_code.min' => 'The customer zip code must be a minimum of 1 characters',
            'address_line_1.string' => 'The customer address line 1 must be a string',
            'address_line_1.max' => 'The customer address line 1 must be a maximum of 255 characters',
            'address_line_1.min' => 'The customer address line 1 must be a minimum of 1 characters',
            'address_line_2.string' => 'The customer address line 2 must be a string',
            'address_line_2.max' => 'The customer address line 2 must be a maximum of 255 characters',
            'address_line_2.min' => 'The customer address line 2 must be a minimum of 1 characters',
            'address_line_3.string' => 'The customer address line 3 must be a string',
            'address_line_3.max' => 'The customer address line 3 must be a maximum of 255 characters',
            'address_line_3.min' => 'The customer address line 3 must be a minimum of 1 characters',
            'profile_photo.image' => 'The customer profile photo must be an image',
            'profile_photo.mimes' => 'The customer profile photo must be a jpeg, png, jpg, gif, svg',
            'profile_photo.max' => 'The customer profile photo must be a maximum of 2048 characters',
        ];
    }
}
