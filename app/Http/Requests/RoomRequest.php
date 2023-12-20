<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'name' => 'required',
            'expert' => 'required',
            'description' => 'required',
            'price' => 'required',
            'main_image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Required name.',
            'expert.required' => 'Required expert.',
            'main_image.image' => 'Required jpg,png.',
            'description.required' => 'Required description.',
            'price.required' => 'Required price.',
        ];
    }
}
