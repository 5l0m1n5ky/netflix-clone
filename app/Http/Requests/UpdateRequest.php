<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
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
            'title' => 'bail|required|max:100',
            'description' => 'required',
            'production' => 'required',
            'media_path' => 'max:20000|mimes:mov,mp4',
            'cover' => 'max:20000|mimes:jpg,png,jpeg',
            'genre' => 'required|min:1'
        ];
    }
}
