<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048', // Must be a valid image file
            'order' => 'required|integer|min:1', // Order must be a positive integer
            'status' => 'required|in:1,2', // Status must be either 1 (Active) or 2 (Inactive)
        ];
    }
}
