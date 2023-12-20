<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Your full name is required.',
            'email.required' => 'Your email is required.',
            'phone.required' => 'Your phone number is required.',
            'check_in.required' => 'Check-in day is required.',
            'checkout.required' => 'Check-out day is required.',
        ];
    }
}
