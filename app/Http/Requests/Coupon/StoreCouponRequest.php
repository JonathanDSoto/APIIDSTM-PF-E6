<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouponRequest extends FormRequest
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
            'code' => 'required|string|max:255|min:1|unique:coupons,code',
            'discount' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'is_active' => 'required|boolean',
            /* 'uses' => 'required|numeric|min:1', */
            'max_uses' => 'required|numeric|min:1',
            'description' => 'nullable|string',
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
            'code.required' => 'The coupon code is required',
            'code.string' => 'The coupon code must be a string',
            'code.max' => 'The coupon code must be a maximum of 255 characters',
            'code.min' => 'The coupon code must be a minimum of 1 characters',
            'code.unique' => 'The coupon code must be unique',
            'discount.required' => 'The coupon discount is required',
            'discount.numeric' => 'The coupon discount must be a number',
            'discount.min' => 'The coupon discount must be a minimum of 1',
            'start_date.required' => 'The coupon start date is required',
            'start_date.date' => 'The coupon start date must be a date',
            'end_date.required' => 'The coupon end date is required',
            'end_date.date' => 'The coupon end date must be a date',
            'end_date.after' => 'The coupon end date must be after the start date',
            'is_active.required' => 'The coupon is active is required',
            'is_active.boolean' => 'The coupon is active must be a boolean',
            'uses.required' => 'The coupon uses is required',
            'uses.numeric' => 'The coupon uses must be a number',
            'uses.min' => 'The coupon uses must be a minimum of 1',
            'max_uses.required' => 'The coupon max uses is required',
            'max_uses.numeric' => 'The coupon max uses must be a number',
            'max_uses.min' => 'The coupon max uses must be a minimum of 1',
            'description.string' => 'The coupon description must be a string',
        ];
    }
}
